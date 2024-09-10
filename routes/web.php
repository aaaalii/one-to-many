<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CountrieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);

Route::resource('/book', BookController::class);

Route::resource('/country', CountrieController::class);