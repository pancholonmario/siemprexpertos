<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/', function () {
    return view('index');
});

Route::get('/','TestController@testfunction');

Route::get('/iniciarsesion', function () {
    return view('profesiones.iniciarsesion');
});



Route::get('/eventos', function () {
    return view('/eventos');
});



Route::get('/asesoria', function () {
    return view('/asesoria');
});



Route::get('/bienestar', function () {
    return view('/bienestar');
});

Route::get('/cursos', function () {
    return view('/cursos');
});

Route::get('/hogar', function () {
    return view('/hogar');
});

Route::get('/serviciotecnico', function () {
    return view('/serviciotecnico');
});

Route::get('/eventos/alquilereventos', function () {
    return view('/profesiones/alquilereventos');
});

Route::get('/clientescomofunciona', function () {
    return view('/footer/clientescomofunciona');
});

Route::get('/clientescomofunciona','Test1Controller@testfunction');

Route::get('/profesionalescomofunciona', function () {
    return view('/footer/profesionalescomofunciona');
});
