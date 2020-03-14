<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home Controller
    public function index() {
        return view('welcome');
    }
}
