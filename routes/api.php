<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return response()->json([
        'message' => 'Hello World! My name is Alther Adrian P. Liga',
        'data' => $request->user()
    ]);
});

