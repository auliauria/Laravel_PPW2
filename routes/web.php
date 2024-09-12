<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\BukuController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'John Doe',
        'email' => 'JohnD@gmail.com'
    ]);
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/buku', [BukuController::class, 'index']);