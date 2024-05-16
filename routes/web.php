<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/masuk', function () {
    return view('masuk');

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('dasboard');

});
