<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

// Display First Page Route
Route::get('/', [registerController::class, 'home']);

// Display Register Page Route
Route::get('/register', [registerController::class, 'create']);

// Register Post Route
Route::post('/register', [registerController::class, 'store']);

// Display Login Page Route
Route::get('/login', [registerController::class, 'login']);

// Display Home Page Route
Route::get('/home', [registerController::class, 'index']);

// Display Post Page Route
Route::get('/post', [registerController::class, 'createPost']);