<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return ['name' => 'Ahsan Al Bashar', 'age' => 29];
});