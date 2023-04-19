<?php

use Illuminate\Support\Facades\Route;



Route::prefix('/')->group(function(){
    Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('user.index');

    Route::get("/layoutLogin",function () {
        return view("user.layoutLogin");
    })->name("layoutLogin");

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




//Route::get('/product/list', [\App\Http\Controllers\ProductController::class, 'list'])
//    ->name('product.list');
//
//Route::get('/add-to-cart/{id}', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.add');
//
//Route::get('/cart', [\App\Http\Controllers\CartController::class, 'list',
//]);
//
//Route::get('/cart/remove-item/{id}', [\App\Http\Controllers\CartController::class, 'removeCartItem'])
//    ->name('cart.remove-item');
//Route::get('/cart/update-quantity/{id}/{quantity}', [\App\Http\Controllers\CartController::class, 'updateQuantity'])
//    ->name('cart.update-quantity');
//Route::get('/cart/update-quantity-api/{id}/{quantity}', [\App\Http\Controllers\CartController::class, 'updateQuantityAPI'])
//    ->name('cart.update-quantity-api');
//Route::post('/cart/checkout', [\App\Http\Controllers\CartController::class, 'checkout'])
//    ->name('cart.checkout');
//Route::get('/cart/checkout-success', [\App\Http\Controllers\CartController::class, 'checkoutSuccess'])
//    ->name('cart.checkout-success');
