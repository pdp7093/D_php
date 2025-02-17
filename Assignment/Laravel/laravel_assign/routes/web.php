<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'index']);
//Signup & Login
Route::get('/Login',[CustomerController::class,'login']);
Route::post('/Login',[CustomerController::class,'login_auth']);
Route::get('/Register',[CustomerController::class,'create']);
Route::post('/Register',[CustomerController::class,'store']);
Route::get('/Logout',[CustomerController::class,'logout']);

//Blogging
Route::get('/Blog',[PostController::class,'show']);
Route::get('/CreateBlog',[PostController::class,'create']);
Route::post('/CreateBlog',[PostController::class,'store']);
Route::get('/Publish/{id}',[PostController::class,'publish']);
Route::get('/Post/{title}',[PostController::class,'view']);
Route::get('/Edit/{id}',[PostController::class,'edit']);
Route::post('/Edit/{id}',[PostController::class,'update']);
Route::get('/Delete/{id}',[PostController::class,'destroy']);

Route::get('/Contact',[ContactController::class,'show']);
Route::post('/Contact',[ContactController::class,'store']);
//Profile
Route::get('/Profile',[CustomerController::class,'show']);
