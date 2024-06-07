<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/about', function () {
    return view('about');
    });
    
Route::get('/post/{id}', function (string $id) {
    return "<h2> POST id: ". $id ." </h2>";
});

// Numeric Number (0-10)
Route::get('/post/{id}', function (string $id) {
    return "<h2> POST id: ". $id ." </h2>";
})->whereNumber('id');

// String (a-z)
Route::get('/post/{name}', function (string $name) {
    return "<h2> POST Name: ". $name ." </h2>";
})->whereAlpha('name');

// AlphaNumeric (siam10)
Route::get('/post/{id}', function (string $id) {
    return "<h2> POST Name and id: ". $id ." </h2>";
})->whereAlphaNumeric('id');

// in (Second parameeter value only excepted.)
Route::get('/post/{id}', function (string $id) {
    return "<h2> POST video or song will you want. I want: ". $id ." </h2>";
})->whereIn('id', ['video', 'song', 'music']);

// Regular Expression (^ (caret means) Everything else expect 0-7 ) 
Route::get('/post/{name}', function (string $name) {
    return "<h2> Regular Expression:  ". $name ." </h2>";
})->where('name', "[^0-7]+");