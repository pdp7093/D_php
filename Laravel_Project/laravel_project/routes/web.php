<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\admin_after_login;
use App\Http\Middleware\admin_before_login;

Route::get('/',[ProductController::class,'index']);

//------------------------------Website-----------------------------------------
//Login
Route::get('/Login', [CustomerController::class, 'login'])->middleware(\App\Http\Middleware\user_before_login::class);
Route::post('/Login', [CustomerController::class, 'login_auth'])
    ->middleware(\App\Http\Middleware\user_before_login::class);
Route::get('/Logout', [CustomerController::class, 'logout']);

//signup
Route::get('/Signup', [CustomerController::class, 'create'])
    ->middleware(\App\Http\Middleware\user_before_login::class);
Route::post('/Signup', [CustomerController::class, 'store'])
    ->middleware(\App\Http\Middleware\user_before_login::class);

//Profile
Route::get('/Profile', [CustomerController::class, 'profile'])
    ->middleware(\App\Http\Middleware\user_after_login::class);
Route::get('/EditProfile/{id}', [CustomerController::class, 'edit'])
->middleware(\App\Http\Middleware\user_after_login::class);
Route::post('/EditProfile/{id}', [CustomerController::class, 'update'])
->middleware(\App\Http\Middleware\user_after_login::class);

//Forgot Password Route
Route::get('/ForgotPassword', [CustomerController::class, 'forgot_v']);
Route::post('/ForgotPassword', [CustomerController::class, 'forgot']);
//Route::post('/ResetPassword', [CustomerController::class, 'reset']);
Route::get('/ResetPassword',[CustomerController::class,'reset']);
Route::post('/ResetPassword',[CustomerController::class,'reset_password']);

//About
Route::get('/About', function () {
    return view('website.about');
});

//Contact
Route::get('/Contact', [ContactController::class, 'create']);
Route::post('/Contact', [ContactController::class, 'store']);

//Category & Product
Route::get('/Categories', [CategoryController::class, 'index']);
Route::get('/ProductDetail/{id}', [ProductController::class, 'product_show']);
Route::get('/Order/{id}', [OrderController::class, 'create'])
    ->middleware(\App\Http\Middleware\user_after_login::class);
Route::post('/Order', [OrderController::class, 'store'])
    ->middleware(\App\Http\Middleware\user_after_login::class);

//Services & Gallery
Route::get('/service', function () {
    return view('website.service');
});
Route::get('/gallery', function () {
    return view('website.gallery');
});



//-------------------------------------Admin Routing--------------------------------------------------

Route::middleware([admin_before_login::class])->group(function(){
    Route::get('/admin-login', [AdminController::class, 'show']);
    Route::post('/admin-login', [AdminController::class, 'adminlogin']);

});
Route::get('/admin-logout', [AdminController::class, 'adminlogout']);

Route::middleware([admin_after_login::class])->group(function(){

    Route::get('/dashboard', function () {
        return view('admin.index');
    });

    //Categories
    Route::get('/Add_Categories', [CategoryController::class, 'create']);
    Route::post('/Add_Categories', [CategoryController::class, 'store']);
    Route::get('/Manage_Categories', [CategoryController::class, 'show']);
    Route::get('/Edit_Categories/{id}', [CategoryController::class, 'edit']);
    Route::post('/Edit_Categories/{id}', [CategoryController::class, 'update']);
    Route::get('/Manage_Categories/{id}', [CategoryController::class, 'destroy']);



    //Products
    Route::get('/Add_Products', [ProductController::class, 'create']);
    Route::post('/Add_Products', [ProductController::class, 'store']);
    Route::get('/Manage_Products', [ProductController::class, 'show']);
    Route::get('/Edit_Products/{id}', [ProductController::class, 'edit']);
    Route::post('/Edit_Products/{id}', [ProductController::class, 'update']);
    Route::get('/Manage_Products/{id}', [ProductController::class, 'destroy']);
    Route::get('/Status_Products/{id}', [ProductController::class, 'status']);

    //Orders
    Route::get('/Add_Orders', [OrderController::class, 'create']);
    Route::get('/Manage_Orders', [OrderController::class, 'show']);
    Route::get('/Manage_Orders/{id}', [OrderController::class, 'destroy']);
    Route::get('/Status_Orders/{id}', [OrderController::class, 'status']);

    //Contact
    Route::get('/Manage_Contact', [ContactController::class, 'show']);
    Route::get('/Manage_Contact/{id}', [ContactController::class, 'destroy']);

    //Users
    Route::get('/Manage_Users', [CustomerController::class, 'show']);
    Route::get('/Manage_Users/{id}', [CustomerController::class, 'destroy']);
    Route::get('/Status_Users/{id}', [CustomerController::class, 'status']);
});



//---------------------------------Api Website Route------------------------------------------------
Route::middleware('api')->post('/api_register',[CustomerController::class,'api_store']);
//---------------------------------Api Admin Route--------------------------------------------------
Route::middleware('api')->get('/all_show',[CustomerController::class,'api_show']);