<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/dashboard', function () {
    return view('user.index');
})->middleware(['auth'])->name('dashboard');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get("/register","Auth\RegisteredUserController@showRegisterForm")->name('register');

require __DIR__.'/auth.php';
require_once __DIR__ . '/fe.php';
require_once __DIR__ . '/be.php';