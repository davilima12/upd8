<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClienteController::class, 'index'])->name('consulta-clientes');

Route::get('/cadastrar-cliente', [ClienteController::class, 'create'])->name('cadastrar-clientes');

Route::get('/editar-cliente/{id}', [ClienteController::class, 'edit'])->name('editar-clientes');
