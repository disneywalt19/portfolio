<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class certificatesController extends Controller
{
    // Certificates Controller
    public function index() {
        return view('certificates');
    }
}
