<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('backend.index');
// });



Route::controller(AuthController::class)->group(function(){
    Route::get('/login','index');
    Route::post('login/post','postLogin')->name('login.post');
    Route::get('/register','register');
    Route::post('registeration/post','postRegisteration')->name('registeration.post');    
});





Route::controller(DashboardController::class)->group(function(){
    Route::get('/','index');
    Route::get('/school-student','school_student');
    Route::get('/school-student-profile','school_student_profile');
    Route::get('/school-student-details','school_student_details');
    Route::get('/school-hotel-room','school_hotel_room');
});




