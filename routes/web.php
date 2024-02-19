<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    //registration
    Route::get('/register', [RegisterController::class, "index"])->name("register");
    Route::post('/register', [RegisterController::class, "create"])->name("register.submit");
    //login
    Route::get('/login', [LoginController::class, "index"])->name("login");
    Route::post('/login', [loginController::class, "create"])->name("login.submit");
});

//Authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, "index"])->name("home");
    Route::get('/logout', [LogoutController::class, "logout"])->name("logout");
});
