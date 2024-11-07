<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/more', function () {
    return view('more');
});

Route::get('/register', function () {
    return view('registration');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
   