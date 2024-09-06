<?php

use Illuminate\Support\Facades\Route;

// ----------------------------------- Routes -----------------------------------------

Route::controller(\App\Http\Controllers\PagesController::class)->group(function () {
    Route::get('/getbooks', 'getBookPage');
    Route::get('/', 'getHomePage');
});

Route::any('/checkRoute/{id}', [\App\Http\Controllers\TestController::class, 'index']);

Route::apiResource('books', \App\Http\Controllers\API\BookController::class);



// ----------------------------------- Purely Tests -----------------------------------------

Route::get('/getIcon', function () {return response()->file(public_path('favicon.ico'));});
Route::get("/somewhere", function () {return view('books.testImage');});
