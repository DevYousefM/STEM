<?php

namespace App\Http\Controllers;

use App\Models\Course;

class FrontController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view("welcome", ["courses" => $courses]);
    }

    public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view("contact");
    }

    public function team()
    {
        return view("team");
    }

    public function courses()
    {
        $courses = Course::all();
        return view("courses", ["courses" => $courses]);
    }

    public function events()
    {
        return view("events");
    }

    public function course($id)
    {
        $course = Course::findOrFail($id);
        return view("single", compact("course"));
    }
}
