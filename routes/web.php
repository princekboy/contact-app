<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/forgot', function () {
    return view('forgot-password');
});

//Register user
Route::post('/users/register', [UserController::class, 'register']);

//Login user
Route::post('/users/login', [UserController::class, 'loginuser'])->name('name');

//Logout user
Route::post('/users/logout', [UserController::class, 'logout'])->name('logout');

//Show dashboard
Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');
