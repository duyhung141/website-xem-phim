<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



Route::prefix('/')->group(function(){
    Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('user.index');

    Route::get('/movie-details', [\App\Http\Controllers\HomeController::class,'movieDetails'])->name('user.movie-details');

    Route::get('/movies-option', [\App\Http\Controllers\HomeController::class,'moviesOption'])->name("user.movies-option");

    Route::get('/play-movie', [\App\Http\Controllers\HomeController::class,'playMovie'])->name("user.play-movie");

});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
