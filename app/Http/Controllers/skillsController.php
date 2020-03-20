<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class skillsController extends Controller
{
    // My Skills Controller
    public function index() {
        return view('skills');
    }
}
