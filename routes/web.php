<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

/* Returning views with 'Route::view()'*/
// Welcome page - default page
Route::view("/", 'welcome');

// Home page
Route::view('home','home');

// Overview page
Route::view('overview', 'overview');

// Sign in page
Route::get('sign_in', [Controllers\SignInController::class, 'show']);

// Register page
Route::get('register',[Controllers\RegisterController::class,'show']);
