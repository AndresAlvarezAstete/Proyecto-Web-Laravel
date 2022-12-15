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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::view('/', ('welcome'));

Route::get('/inicio', 'InicioController@index');
Route::post('/inicio', 'InicioController@logo');
Route::post('/inicio', 'InicioController@datosGenerales');


//Front End
Route::get('/', 'FrontEndController@inicio');
Route::get('/Excursiones-Todas', 'FrontEndController@Excursiones');
Route::get('Excursion/{id}', 'FrontEndController@Excursion');
Route::get('Excursiones/{id}', 'FrontEndController@ExcursionesPorCategoria');
Route::post('/', 'FrontEndController@Mensajes');



Route::view('/datos', 'modulos.datos');
Route::put('/datos', 'UsuariosController@update');

Route::get('/usuarios', 'UsuariosController@index');
Route::get('/crear-usuarios', 'UsuariosController@create');
Route::post('/crear-usuarios', 'UsuariosController@store');
Route::delete('/usuarios/{id}', 'UsuariosController@destroy');

Route::get('/slide', 'SlideController@index');
Route::post('/slide', 'SlideController@store');
Route::delete('/slide/{id}', 'SlideController@destroy');

Route::get('/categorias', 'CategoriasController@index');
Route::post('/categorias', 'CategoriasController@store');
Route::put('/categoria/{id}', 'CategoriasController@update');
Route::delete('/ctg/{id}', 'CategoriasController@destroy');

Route::get('/excursiones', 'ExcursionesController@index');
Route::get('/crear-excursion', 'ExcursionesController@create');
Route::post('/crear-excursion', 'ExcursionesController@store');
Route::get('/excursion/{excursiones}/edit', 'ExcursionesController@edit');
Route::put('/excursion/{excursiones}', 'ExcursionesController@update')->name('actualizar-excursion');
Route::delete('eliminar-excursion/{excursiones}', 'ExcursionesController@destroy')->name('eliminar-excursion');

Route::get('galeria/{id}', 'GaleriasController@create');
Route::post('galeria/{id}', 'GaleriasController@store');
Route::delete('eliminar-img/{id}', 'GaleriasController@destroy');

Route::get('/mensajes', 'MensajeController@index');
Route::get('/leer-mensaje/{id}', 'MensajeController@show');
