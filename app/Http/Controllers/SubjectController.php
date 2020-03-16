<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function showAll()
    {
        return view("visitor.subjects.all");
    }
}
