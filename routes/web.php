<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

//AUTENTIFICACION DE USUARIO
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//RUTA DE ACTIVO FIJO
Route::resource('activoFijo', 'ActivoFijoController');

//RUTA TRABAJADORES
Route::resource('trabajadores','TrabajadorController');

//RUTA BITACORA
Route::resource('bitacora','BitacoraController');

//Ruta depreciaciones
Route::resource('depretiations', 'DepretiationController');