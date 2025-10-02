<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/saludos',  function () {
    return 'Hola Mundo';
});

Route::get('/bienvenidos',  function () {
    return view ('bienvenidos');
});
