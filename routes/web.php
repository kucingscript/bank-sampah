<?php

use App\Http\Controllers\BtnController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/information', [InformationController::class, "index"]);

Route::get('/account', function () {
    return view("account");
});
