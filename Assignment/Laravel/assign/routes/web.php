<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('website.index');
});
//Signup & Login

Route::get('Signup',[CustomerController::class,'create']);
Route::post('Signup',[CustomerController::class,'store']);
Route::get('Login',[CustomerController::class,'login']);


Route::get('Blog', function () {
    return view('website.blog');
});
Route::get('Create Blog', function () {
    return view('website.blog');
});
Route::get('About', function () {
    return view('website.about');
});
Route::get('Profile', function () {
    return view('website.profile');
});
