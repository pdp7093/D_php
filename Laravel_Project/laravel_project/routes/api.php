<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



//---------------------------------------------Website Api---------------------------------------------
Route::post('/api_login',[CustomerController::class,'api_login']);
Route::post('/Customer_create',[CustomerController::class,'api_store']);
Route::post('/Contact_create', [ContactController::class, 'api_create_contact']);
//---------------------------------------------Admin Api---------------------------------------------

//Category
Route::get('/Show_Category', [CategoryController::class, 'api_manage_category']);
Route::post('/api_create_category', [CategoryController::class, 'api_create_category']);
Route::delete('/api_category_delete/{id}', [CategoryController::class, 'api_category_delete']);
Route::put('/api_category_update/{id}', [CategoryController::class, 'api_category_update']);

//Product
Route::get('/Show_Product', [ProductController::class, 'api_manage_product']);
Route::post('/Create_Product', [ProductController::class, 'api_create_product']);
//Customer

//Contact
Route::get('/Show_Contact', [ContactController::class, 'show_contact']);
Route::delete('/Delete_Contact/{id}', [ContactController::class, 'delete_contact']);
