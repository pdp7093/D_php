<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Models\order;
use app\Models\cart;

Route::get('/', function () {
    return view('pratice');
});



Route::post('/cart',[CartController::class,"store"]);

Route::post('/order',[OrderController::class,"store"]);
