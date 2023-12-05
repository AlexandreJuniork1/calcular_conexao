<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





// Rota para exibir o formulário de seleção
Route::get('/database-selections', [DatabaseController::class, 'showForm'])->name('database.selections');

// Rota para conectar ao banco de dados selecionado
Route::post('/connect-database', [DatabaseController::class, 'connectDatabase'])->name('connect.database');
