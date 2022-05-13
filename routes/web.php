<?php

use App\Http\Controllers\ContatoController;
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

Route::get('/', [ContatoController::class, 'index']);
Route::get('/cadastro', [ContatoController::class, 'create']);
Route::post('/cadastro/in', [ContatoController::class, 'store']);
Route::get('/editar/{id}', [ContatoController::class, 'edit']);
Route::put('/editar/{id}', [ContatoController::class, 'update']);
Route::get('/exibe/{id}', [ContatoController::class, 'show']);
Route::delete('/contatos/{id}', [ContatoController::class, 'destroy']);