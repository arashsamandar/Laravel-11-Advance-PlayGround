<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\TestController::class)->group(function () {
    Route::get('/', 'returnSomeString');
});

Route::apiResource('books', \App\Http\Controllers\API\BookController::class);
