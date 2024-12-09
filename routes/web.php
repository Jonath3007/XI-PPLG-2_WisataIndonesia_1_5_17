<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Wisata_Indonesia;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');