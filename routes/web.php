<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return "Hi there 👋";
});

Route::get('/register', function() {
    return view('auth.register');
});
