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
    $produtos = \App\Models\Produto::all();
    $categorias = \App\Models\Categoria::all();
	return view('vitrine', compact('produtos', 'categorias'));
});

Route::get('categoriasvitrine/{categoria}', function ($categoria){
    $categorias = \App\Models\Categoria::all();
    $categoriaview = \App\Models\Categoria::findOrFail($categoria);
    return view('vitrine2', compact('categorias', 'categoriaview'));
})->name('categorias.vitrine');

Route::get('user/{id}', function ($id){
    return "User: " . $id;
});

Route::resource('clientes', \App\Http\Controllers\ClienteController::class);
Route::resource('categorias', \App\Http\Controllers\CategoriaController::class);
Route::resource('produtos', \App\Http\Controllers\ProdutoController::class);

