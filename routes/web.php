<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BtnController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use Symfony\Component\HttpFoundation\AcceptHeader;

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

Route::get('/', [BtnController::class, 'btnList']);

Route::get('/home', [HomeController::class, "index"]);

Route::get('/information', [InformationController::class, "index"])->middleware('auth');

Route::view('/login', 'login');
Route::view('/register', 'register');

// Route::get('/account', [AuthController::class, "index"])->name('account');
// Route::post('/login', [AuthController::class, "login"]);
// Route::post('/register', [AuthController::class, "register"]);
// Route::get('/test', [AuthController::class, "test"]);
// Route::get('/logout', [AuthController::class, "logout"]);