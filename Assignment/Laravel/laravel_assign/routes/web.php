<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
});
//Signup & Login
Route::get('/Login',[CustomerController::class,'login']);
Route::post('/Login',[CustomerController::class,'login_auth']);
Route::get('/Register',[CustomerController::class,'create']);
Route::post('/Register',[CustomerController::class,'store']);
Route::get('/Logout',[CustomerController::class,'logout']);

//Blogging
Route::get('/Blog', function () {
  
});
Route::get('/CreateBlog',[PostController::class,'create']);
Route::get('/About', function () {
    return view('website.about');
});
Route::get('/Profile',[CustomerController::class,'show']);
