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

Route::get('hello', function () {
	return "Hello Programação Web 3";
});

Route::get('user/{id}', function ($id){
    return "User: " . $id;
});

Route::resource('clientes', \App\Http\Controllers\ClienteController::class);
Route::resource('categorias', \App\Http\Controllers\CategoriaController::class);
Route::resource('produtos', \App\Http\Controllers\ProdutoController::class);

