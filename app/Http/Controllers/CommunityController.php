<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function all()
    {
        return view("visitor.community.all");
    }
}
