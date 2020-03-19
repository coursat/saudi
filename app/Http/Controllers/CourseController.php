<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function single()
    {
        return view("visitor.course.playlist");
    }
    public function recent()
    {
        return view("visitor.course.recent_courses");
    }
    public function preview()
    {
        return view("visitor.course.course-preview");
    }
    public function mycourses()
    {
        return view("visitor.course.mycourses");
    }
}
