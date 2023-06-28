<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Nafezly\Payments\Classes\PaymobPayment;

class PaymentController extends Controller
{

    public function index($id)
    {
        $price = Course::findOrFail($id)->price;
        $course = Course::findOrFail($id)->course;
        return view("registration", compact("price", "course"));
    }

    public function process_payment(Request $request)
    {
        $payment = new PaymobPayment();
        $amount = 0;
        $level = (int)$request->level;
        if ($level == 1) {
            $amount = $request->amount;
        } else if ($level == 2) {
            $amount = ($request->amount * $level) - 100;
        } else if ($level == 3) {
            $amount = ($request->amount * $level) - 250;
        }
        $response = $payment
            ->setUserFirstName($request->fullname)
            ->setUserLastName("non")
            ->setUserEmail($request->email)
            ->setUserPhone($request->phone)
            ->setCurrency("EGP")
            ->setAmount($amount)
            ->pay();


        Payment::create([
            "fullname" => $request->fullname,
            "email" => $request->email,
            "phone" => $request->phone,
            "country" => $request->country,
            "level" => $level,
            "payment_id" => $response["payment_id"],
            "amount" => $amount,
            "course" => $request->course,
            "status" => "Pending",
        ]);
        return Redirect::to($response["redirect_url"]);
    }

    public function verifyWithPaymob(Request $request)
    {
        $payment = new PaymobPayment();
        $response = $payment->verify($request);
        $msg = $response["message"];
        $stu = $response["success"];
        $payment_db = Payment::where("payment_id", $response["payment_id"])->first();
        if ($response["success"]) {
            $payment_db->update(["status" => "Payment Completed"]);
        } else {
            $payment_db->update(["status" => "Payment Failed"]);
        }
        return view("status", compact("msg"), compact("stu"));
    }

    public function payments()
    {
        $payments = Payment::orderBy("updated_at", "desc")->get();
        return view("payments", ["payments" => $payments]);
    }
}
