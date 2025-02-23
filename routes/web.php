<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/en', function () {
    return view('welcome');
});

Route::get('/tr', function () {
    return view('welcometr');
})->middleware('check');

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/home', function () {
    echo "This is home page";
});