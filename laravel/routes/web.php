<?php

use App\Http\Controllers\VolunterController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\UserController;

Route::get('/', [PetController::class, 'load_pets_on_welcome']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contactPage');
});

Route::get('/gallery', [PetController::class, 'load_pets_gallery']);

Route::get('/more', function () {
    return view('more');
});

Route::get('/register', function () {
    return view('registration');
});

Route::post('/register', [RegistrationController::class, 'register'])->name('registerPush');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/pet', [PetController::class, 'load_single_pet'])->name('onePet');
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

Route::post('/donate', [DonationController::class, 'processDonation'])->name('donate');

Route::middleware(['volunteer'])->group(function() {
    Route::get('/volunteer', [VolunterController::class, 'get_volunteer_pets'])->name('volunteer');
    Route::post('/volunteer', [VolunterController::class, 'volunteering_pet'])->name('volunteerPet');
    Route::post('/unvolunteer', [VolunterController::class, 'unvolunteer_pet'])->name('unvolunteerPet');
    
});

Route::middleware(['admin'])->group(function() {
    Route::get('/admin', [UserController::class, 'get_users']);

    Route::post('/adminadd', [UserController::class, 'add_user'])->name('userAdd');
    Route::post('/admindelete', [UserController::class, 'delete_user'])->name('userDelete');

    Route::get('/volunteermanager', [UserController::class, 'get_volunteers'])->name('volunteermanager');
    Route::post('/volunteermanageraccept', [VolunterController::class, 'accept_volunteer'])->name('acceptVolunteer');
});
/* Routes for user types ends here */
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');