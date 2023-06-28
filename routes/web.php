<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [FrontController::class, 'index'])->name("home");
Route::get('/about', [FrontController::class, 'about'])->name("about");
Route::get('/courses', [FrontController::class, 'courses'])->name("courses");
Route::get('/courses/{id?}', [FrontController::class, 'course'])->name("courses");
Route::get('/contact', [FrontController::class, 'contact'])->name("contact");
Route::get('/events', [FrontController::class, 'events'])->name("events");
Route::get('/team', [FrontController::class, 'team'])->name("team");

//Payment
Route::get('/payment/{id}', [PaymentController::class, "index"])->name('payment.form');
Route::post('/payment/process', [PaymentController::class, "process_payment"])->name('payment.process');
Route::get('/callback', [PaymentController::class, "verifyWithPaymob"])->name('payment.callback');
Route::middleware("checkAdmin")->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    Route::get('/payments', [PaymentController::class, "payments"])->name('payments');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
