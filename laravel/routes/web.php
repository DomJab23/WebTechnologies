<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ImageController;


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

Route::post('/register', [RegistrationController::class, 'register'])->name('registerPush');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/pet', [PetController::class, 'get_pet'])->name('onePet');

Route::middleware(['logged'])->group(function() {
    Route::get('/management', [PetController::class, 'get_pets']);
    Route::post('/managementadd', [PetController::class, 'add_pet'])->name('petAdd');
    Route::post('/managementupdate', [PetController::class, 'update_pet'])->name('petUpdate');
    Route::post('/managementdelete', [PetController::class, 'delete_pet'])->name('petDelete');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/addimage', [ImageController::class, 'store_image'])->name('imageAdd');
});

   