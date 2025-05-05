<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Rute Detail Job (statis untuk sekarang)
Route::get('/detailjob', function () {
    return view('detailjob');
})->name('job.detail');

Route::get('/login', function () {
    return view('login');
});
