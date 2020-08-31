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
Route::get('/form', function () {
    return view('filme.criar');
});

Route::get('/genero', 'GeneroController@criar');
Route::post('/genero', 'GeneroController@guardar');

Route::get('/filme/criar', 'FilmeController@criar');
Route::post('/filme/guardar', 'FilmeController@guardar');

Route::get('/filme/atualizar/{filme}', 'FilmeController@editar');
Route::post('/filme/atualizar/{filme}', 'FilmeController@atualizar');

Route::get('/filme/{filme}', 'FilmeController@visualizar');

Route::delete('/filme/{filme}', 'FilmeController@deletar');
