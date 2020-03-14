<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Contact Controller
    public function index() {
        return view('contact');
    }
}
