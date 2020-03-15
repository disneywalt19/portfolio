<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    // Skills Controller
    public function index() {
        return view('skills');
    }
}
