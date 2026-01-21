<?php

use Illuminate\Support\Facades\Route;


Route::get('/alther', function () {
    return 'Hello World! My name is Alther Adrian P. Liga';
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/profile', function () {
    return '<h1>Alther Adrian P. Liga</h1><p>3rd Year BSIT</p>';
});