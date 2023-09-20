<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\homeController;

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

// -------  RegisterController Routes  --------------  // 

// Display First Page Route
Route::get('/', [registerController::class, 'home']);

// Register Routes
Route::get('/register', [registerController::class, 'create']);
Route::post('/register', [registerController::class, 'store']) -> name('register');
// End of Register Routes


// Display Login Page Route
Route::get('/login', [registerController::class, 'showLogin']);
// Route::post('/login', [registerController::class, 'login']) -> name('login');

// Route::get('/logout', [registerController::class, 'logout']);

// -------  End of RegisterController Routes  --------------  //



// -------  HomeController Routes  --------------  //

// Display Home Page Route
Route::get('/home', [homeController::class, 'index']);

// Display Post Page Route
Route::get('/post', [homeController::class, 'createPost']);

// Display Profile Page Route
Route::get('/profile', [homeController::class, 'profile']);

// Display Edit Profile Page Route
Route::get('/edit-profile', [homeController::class, 'editProfile']);

// Display Setting Page Route
Route::get('/settings', [homeController::class, 'settings']);

// ------- End of HomeController Routes  --------------  //