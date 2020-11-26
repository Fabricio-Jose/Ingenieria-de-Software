<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/en', function () {
    return "Aqui eleccion de regristro o login";
});


Route::get('/perfil', function () {
    return "visa de perfil";
});

//Route::get('/prueba', 'EjemploController@inicio');

Route::get('/', function () {
    return "Pagina Principal";
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
