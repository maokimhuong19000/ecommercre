<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.index');
    }

    public function school_student(){
        return view('backend.school-student');
    }
}
