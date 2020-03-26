<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\course;
class SearchController extends Controller
{
    public function index()
    {
        return view("visitor.search");
    }
    public function result(Request $request)
    {

        $res = course::whereRaw('match (title, description) against (? in boolean mode)', [$request]);
        return $res;

    }
}
