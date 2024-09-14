<?php

use Illuminate\Support\Facades\Route;

// ----------------------------------- React.js Routes ------------------------------------------

Route::controller(\App\Http\Controllers\PagesController::class)->group(function () {
    Route::get('/getbooks', 'getBookPage');
    Route::get('/', 'getHomePage');
});

Route::apiResource('books', \App\Http\Controllers\API\BookController::class);

// ------------------------------------- Purely Tests -------------------------------------------



// ------------------------------------ Archived Tests ------------------------------------------

Route::controller(\App\Http\Controllers\SampleTestsController::class)->group(function () {
    Route::get('/math/{name}/{a}/{b}', 'myMathRoute');
    Route::any('somewhere/{id}','index');
    Route::get('/getToken','getToken');
});
