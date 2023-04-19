<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
Route::get("/register",[\App\Http\Controllers\Auth\LoginController::class,'showRegisterForm'])->name('register');

require __DIR__.'/auth.php';
require_once __DIR__ . '/fe.php';
require_once __DIR__ . '/be.php';
