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

Route::get('/clientes', 'ClientesController@index');
Route::get('/clientes/novo', 'clientesController@create');
Route::post('/clientes/salvar', 'clientesController@store');
Route::post('/clientes/gravar/{id}', 'clientesController@update');
Route::get('/clientes/{id}', 'clientesController@show');
Route::get('/clientes/editar/{id}', 'clientesController@edit');
Route::get('/clientes/excluir/{id}', 'clientesController@destroy');


