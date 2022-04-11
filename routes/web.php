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

use App\Http\Controllers\fornecedoresController;

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/fornecedores/novo', 
        [fornecedoresController::class, 'cadastro_novo']);
Route::post('/fornecedores/novo', [fornecedoresController::class, 'novo'])->name('fornecedores_novo');

Route::get('/fornecedores/listar', [fornecedoresController::class, 'listar'])->name('fornecedores_listar');

Route::get('/fornecedores/alterar/{id}', [fornecedoresController::class, 'alterar'])->name('fornecedores_alterar');

Route::post('/fornecedores/alterar/', [fornecedoresController::class, 'salvar'])->name('fornecedores_salvar');

Route::get('/fornecedores/excluir/{id}', [fornecedoresController::class, 'excluir'])->name('fornecedores_excluir');
