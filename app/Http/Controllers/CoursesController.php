<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    // Courses finished Controller
    public function index() {
        return view('courses');
    }
}
