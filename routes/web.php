<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', [PageController::class, 'top']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/books', [BookController::class, 'index']);

Route::get('/books/{id}', [BookController::class, 'show']);
