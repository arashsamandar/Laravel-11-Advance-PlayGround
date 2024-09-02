<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('books', \App\Http\Controllers\API\BookController::class);
Route::get('/homeArash', function () {
    return view('home');
});

Route::get('/getbooks', function () {
    return view('books.book');
});
