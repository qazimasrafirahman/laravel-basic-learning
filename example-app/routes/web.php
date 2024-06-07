<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about/{id}', function (string $id) {
    return "<h2> This is about with id = ". $id."</h2>";
})->whereAlpha('id');
