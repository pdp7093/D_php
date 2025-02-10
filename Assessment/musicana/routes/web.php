<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
});
Route::get('/About', function () {
    return view('website.about');
});
Route::get('/Track', function () {
    return view('website.track');
});

Route::get('/Register', function () {
    return view('website.signup');
});
