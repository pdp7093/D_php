<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('website.index');
});
//Signup & Login

Route::get('Signup',[CustomerController::class,'create']);
Route::post('Signup',[CustomerController::class,'store']);
Route::get('Login',[CustomerController::class,'login']);
Route::post('Login',[CustomerController::class,'login_auth']);
Route::get('Profile',[CustomerController::class,'show']);

//Blog
Route::get('Blog',[BlogController::class,'show']);
Route::get('CreateBlog',[BlogController::class,'create']);
Route::post('CreateBlog',[BlogController::class,'store']);

//About
Route::get('About', function () {
    return view('website.about');
});
