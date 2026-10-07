<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/home', function () {
    return 'Selamat Pagi Dunia, Andika Setia Pambudi-707082400081';
});