<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DonationController;


Route::get('/', [PetController::class, 'get_pets_main']);


Route::get('/about', function () {
    return view('about');
});
Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/gallery', [PetController::class, 'get_pets_galery']);


Route::get('/more', function () {
    return view('more');
});

Route::get('/register', function () {
    return view('registration');
});

Route::post('/register', [RegistrationController::class, 'register'])->name('registerPush');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/pet', [PetController::class, 'get_pet'])->name('onePet');


/* Routes for the different user types */
Route::middleware(['employee'])->group(function() {
    Route::get('/management', [PetController::class, 'get_pets']);
    Route::post('/managementadd', [PetController::class, 'add_pet'])->name('petAdd');
    Route::post('/managementupdate', [PetController::class, 'update_pet'])->name('petUpdate');
    Route::post('/managementdelete', [PetController::class, 'delete_pet'])->name('petDelete');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/addimage', [ImageController::class, 'store_image'])->name('imageAdd');
    Route::post('/deleteimage', [ImageController::class, 'delete_image'])->name('imageDelete');
});
/* Routes for user types ends here */

Route::post('/donate', [DonationController::class, 'processDonation'])->name('donate');

Route::middleware(['volunteer'/* Rework so this functions for employee and admin too maybe */])->group(function() {
    Route::get('/volunteer', [PetController::class, 'get_volunteer_pets'])->name('volunteer');
    Route::post('/volunteer', [PetController::class, 'volunteer_pet'])->name('volunteerPet');
    Route::post('/unvolunteer', [PetController::class, 'unvolunteer_pet'])->name('unvolunteerPet');
    
});
Route::middleware(['admin'])->group(function() {
    Route::get('/admin', [UserController::class, 'get_users']);
});


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');