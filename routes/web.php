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

Route::get('/', function () {
    return view('welcome');
});

// Display First Page
Route::get('/home', [registerController::class, 'home']);

// Display Register Page
Route::get('/register', [registerController::class, 'create']);

// Display Login Page
Route::get('/login', [registerController::class, 'login']);