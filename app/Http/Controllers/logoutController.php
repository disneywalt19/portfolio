<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    //  Logout COntroller
    public function index() {
        return view('logout');
    }
}
