<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    // Welcome Controller
    public function index() {
        return view('welcome');
    }
}
