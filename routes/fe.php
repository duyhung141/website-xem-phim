<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



Route::prefix('/')->group(function(){
    Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('user.index');

    Route::get('/movie-details', function () {
        return view('user.movie-details');
    })->name('user.movieDetails');

    Route::get("/movie-hot",function(){
        return view("user.movie-hot");
    })->name("movie-hot");
    Route::get("/movie-oscar",function(){
        return view("user.movie-oscar");
    })->name("movie-oscar");
    Route::get("/play-movie",function(){
        return view("user.layout-play-movie");
    })->name("play-movie");


});
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
