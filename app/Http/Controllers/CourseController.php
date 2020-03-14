<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function single()
    {
        return view("visitor.course.playlist");
    }
}
