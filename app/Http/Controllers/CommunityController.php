<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    pubic function all()
    {
        return view("visitor.community.all");
    }
}
