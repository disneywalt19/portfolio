<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    // Projects Controller
    public function index() {
        return view('projects');
    }
}
