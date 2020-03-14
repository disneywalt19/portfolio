<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // About Controller
    public function index() {
        return view('about');
    }
}
