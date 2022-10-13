<?php

use Illuminate\Support\Facades\Route;

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

//PAGINA PRINCIPAL
Route::get('/', function () {
    return view('welcome');
});

//MENU
Route::get('/menu', function () {
    return view('menu');
});

//Rutas controller
Auth::routes();

//JUGADORS
Route::get('/mostrarJugador', 'MostrarJugador@llistaJugadors');

//EQUIPS
Route::get('/mostrarEquip', 'MostrarEquip@llistaEquips');

//BUSCADOR
Route::get('/consultarOptions', 'Consulta@opciones');

Route::get('/consulta', 'Consulta@buscadorJugador');

Route::get('/consultaNacionalitat', 'Consulta@buscadorNacionalitat');

Route::get('/consultaDorsal', 'Consulta@buscadorDorsal');

Route::get('/consultaEquip', 'Consulta@buscadorEquip');

Route::get('/consultaCiutatEquip', 'Consulta@buscadorCiutatEquip');

// OPCIONES EDITAR
Route::get('/editar', function () {
    return view('editar');
});

//EDITAR JUGADOR
Route::get('/editarJugador', 'EditarJugador@editar');

Route::get('/editarJugador/{id}/edit', 'EditarJugador@edit')->name('edit');

Route::patch('/editarJugador/{id}/update', 'EditarJugador@update')->name('update');

//EDITAR EQUIPO
Route::get('/editarEquip', 'EditarEquip@editar');

Route::get('/editarEquip/{id}/edit', 'EditarEquip@edit')->name('editEquip');

Route::patch('/editarEquip/{id}/update', 'EditarEquip@update')->name('actualizar');

//INSERTAR JUGADOR
Route::get('/insertarJugador', 'InsertarJugador@insertar');

Route::post('/insertarJugador', 'InsertarJugador@insertado')->name('insertado');

Route::get('/eliminarJugador', 'EliminarJugador@eliminar');

//INSERTAR EQUIPO
Route::get('/insertarEquip', 'InsertarEquip@insertar');

Route::post('/insertarEquip', 'InsertarEquip@insertado')->name('insertadoEquip');

Route::get('/eliminarJugador', 'InsertarEquip@eliminar');


Route::get('/home', 'HomeController@index')->name('home');
