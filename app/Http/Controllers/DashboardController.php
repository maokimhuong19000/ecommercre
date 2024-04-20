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

    public function school_student_profile(){
        return view('backend.school-student-profile');
    }


    public function school_student_details(){
        return view('backend.school-student-details');
    }

    public function school_hotel_room(){

        return view('backend.school-hotel-room');
    }
}