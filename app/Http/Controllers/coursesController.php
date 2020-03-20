<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coursesController extends Controller
{
    // Courses Finished Controller
    public function index() {
        return view('courses');
    }
}
