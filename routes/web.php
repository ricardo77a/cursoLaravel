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
*/

Route::get('/', function () {
    return view('welcome');
});





Route::get('foo', function () {
    return 'Hello World';
});


Route::get('user/{id}', function ($id) {
    return 'Tu nombre es: '.$id;
});


Route::get('nombre/{nombre}/{aPaterno}/{aMaterno}', function ($nombre, $aPaterno, $aMaterno) {
    return 'Tu nombre es: '.$nombre.' '.$aPaterno.' '.$aMaterno;
});

/* Ruta de Prueba sin parámetros */
Route::get('pruebaRuta', 'HomeController@pruebaRuta');

/* Ruta de Prueba con parámetros */
Route::get('nombre/{nombre}', 'HomeController@nombre');

/* Ruta de Prueba con parámetros a vista */
Route::get('dependencia/{dependencia}','HomeController@dependencia');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('info', 'EmpleadosController@info');
/* Resource route a resource controller */
Route::resource('empleados', 'EmpleadosController');
Route::resource('incidencias', 'IncidenciaController');
Route::resource('equipos', 'EquiposController');
Route::get('get-equipos/puntos', 'equiposController@puntos');
Route::get('get-equipos/jugados', 'equiposController@jugados');
Route::get('get-equipos/ganados', 'equiposController@ganados');
Route::get('get-equipos/empatados', 'equiposController@empatados');
Route::get('get-equipos/perdidos', 'equiposController@perdidos');
Route::get('get-equipos/equipos', 'equiposController@equipos');
