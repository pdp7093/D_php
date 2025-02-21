<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//--------------------Website----------------------------
Route::get('/',[SongController::class,'index']);

//Signup & Login
Route::get('/Register',[UserController::class,'create']);
Route::post('/Register',[UserController::class,'store']);
Route::get('/Login',[UserController::class,'login']);
Route::post('/CheckLogin',[UserController::class,'login_auth']);

//Profile Related Routes
Route::get('/Profile',[UserController::class,'show']);
Route::get('/Logout',[UserController::class,'logout']);
Route::get('/ForgotPassword/{email}',[UserController::class,'forgot']);
Route::post('/ForgotPassword/{email}',[UserController::class,'sendmail']);
Route::get('/ResetPassword/{email}',[UserController::class,'reset_pass']);
Route::post('/ResetPassword/{email}',[UserController::class,'forgot_pass']);

//About
Route::get('/About', function () {
    return view('website.about');
});

//Music And Tracks
Route::get('/Albums',[SongController::class,'album']);
Route::get('/view/{id}',[SongController::class,'view']);

//Review
Route::get('/Review/{id}',[ReviewController::class,'create']);
Route::post('/Review/{id}',[ReviewController::class,'store']);

//Forgot Password
Route::get('/Forgot', function () {
    return view('website.forgot');
});


//-----------------Admin Routing--------------------------------
//Admin Login
Route::get('/AdminLogin',[AdminController::class,'show']);
Route::post('/AdminLogin',[AdminController::class,'adminlogin']);
Route::get('/AdminLogout',[AdminController::class,'adminlogout']);
Route::get('/AdminRegister',[AdminController::class,'create']);
Route::post('/AdminRegister',[AdminController::class,'store']);

//Dashboard
Route::get('/dashboard', function () {
    return view('admin.index');
});
//Album Route
Route::get('/AddAlbum',[AlbumController::class,'create']);
Route::post('/AddAlbum',[AlbumController::class,'store']);
Route::get('/ManageAlbum',[AlbumController::class,'show']);
Route::get('/Edit/{id}',[AlbumController::class,'edit']);
Route::post('/Edit/{id}',[AlbumController::class,'update']);
Route::get('/Delete/{id}',[AlbumController::class,'destroy']);

//Song Route
Route::get('/AddMusic',[SongController::class,'create']);
Route::post('/AddMusic',[SongController::class,'store']);
Route::get('/ManageMusic',[SongController::class,'show']);
Route::get('/EditMusic/{id}',[SongController::class,'edit']);
Route::post('/EditMusic/{id}',[SongController::class,'update']);
Route::get('/Delete/{id}',[SongController::class,'destroy']);

//User Related Work
Route::get('/AddUser', function () {
    return view('admin.add_user');
});
