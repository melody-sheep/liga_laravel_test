<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    $user = $request->user();
    $html = '<html><body>';
    $html .= '<h1>Hello World!</h1>';
    $html .= '<p>- ' . ($user ? $user->name : 'Alther Adrian Liga') . '</p>';
    $html .= '</body></html>';
    return response($html)->header('Content-Type', 'text/html');
});

