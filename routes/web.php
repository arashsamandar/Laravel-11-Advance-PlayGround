<?php

use Illuminate\Support\Facades\Route;

// ----------------------------------- Routes -----------------------------------------

Route::controller(\App\Http\Controllers\PagesController::class)->group(function () {
    Route::get('/getbooks', 'getBookPage');
    Route::get('/', 'getHomePage');
});

Route::apiResource('books', \App\Http\Controllers\API\BookController::class);

// ----------------------------------- Purely Tests -----------------------------------------

Route::controller(\App\Http\Controllers\TestController::class)->group(function () {
    Route::any('/somewhere/{id}', 'index');
    Route::get('/getToken', 'getToken');

    Route::get('/math/{name}/{a}/{b}', 'myMathRoute');
});
