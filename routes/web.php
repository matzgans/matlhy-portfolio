<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});
Route::get('/contact', function () {
    return view('landing.contact');
});
Route::get('/portfolio', function () {
    return view('landing.portfolio');
});
