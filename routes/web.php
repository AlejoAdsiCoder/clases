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
Route::get('/', 'HomeController@index');
Route::resource('equipos', 'EquiposController');
Route::resource('Jugadores', 'JugadoresController');

Route::get('equipos', function () {
    // Nombre de la carpeta.Nombre del archivo (sin extension)
    return view('equipos.index');
});

Route::get('equipos/show/{id}', function($id) {
    return view('equipos.show', array('id' => $id));
});


Route::get('equipos/create', function () {
    return view('equipos.create');
});

Route::get('equipos/show/{id}', function($id) {
    return "Detalle de equipo $id";
});

Route::get('equipos/edit/{id}', function($id) {
    return view('equipos/edit')->with('id', $id);
});

Route::get('jugadores', function () {
    return "Listado de jugadores";
});

Route::get('jugadores/show/{id}', function () {
    return "Detalle del jugador $id";
});

Route::get('jugadores/create', function () {
    return "Crear jugador";
});

Route::get('jugadores/edit/{id}', function ($id) {
    return "Modificar jugador $id";
});




