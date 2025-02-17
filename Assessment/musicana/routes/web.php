<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//--------------------Website----------------------------
Route::get('/', function () {
    return view('website.index');
});

//Signup & Login
Route::get('/Register',[UserController::class,'create']);
Route::post('/Register',[UserController::class,'store']);
Route::get('/Login',[UserController::class,'login']);
Route::post('/CheckLogin',[UserController::class,'login_auth']);

//Profile Related Routes
Route::get('/Profile',[UserController::class,'show']);
Route::get('/Logout',[UserController::class,'logout']);

//About
Route::get('/About', function () {
    return view('website.about');
});

//Music And Tracks
Route::get('/Track', function () {
    return view('website.track');
});



//-----------------Admin Routing--------------------------------
//Admin Login
Route::get('/AdminLogin',[AdminController::class,'show']);
Route::post('/AdminLogin',[AdminController::class,'adminlogin']);
Route::get('/AdminLogout',[AdminController::class,'adminlogout']);

//Dashboard
Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/AddUser', function () {
    return view('admin.add_user');
});
