<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\course;
class SearchController extends Controller
{
    public function index()
    {
        $result= course::whereRaw('MATCH (`title`,`desc`) AGAINST ("كورس","فوتوشوب")')->get();
        return view("visitor.search")->with('data',$result);
    }
}
