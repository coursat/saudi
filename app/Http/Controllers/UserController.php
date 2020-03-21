<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function profile()
    {
        return view("visitor.user.profile");
    }
    public function info()
    {
        return view("visitor.user.info");
    }
    public function edit()
    {
        return view("visitor.user.profile");
    }
}
