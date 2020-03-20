<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    // About Me controller
    public function index() {
        return view('about');
    }
}
