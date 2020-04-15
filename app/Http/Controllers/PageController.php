<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use App\course;
use App\courses;
use App\article;
use App\lessons;
class PageController extends Controller
{
    public function home(Request $request)
    {

        return view('visitor.home.content');
    }

}
