<?php

use App\Http\Controllers\ClienteController;
use App\Models\Cidade;
use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/buscar-estados', function(){
    return Estado::get();
});

Route::get('/buscar-cidades', function(){
    return Cidade::get();
});


Route::post('/cadastrar-cliente', [ClienteController::class, 'store']);
Route::get('/buscar-clientes', [ClienteController::class, 'buscarClientes']);
Route::get('/buscar-cliente/{id}', [ClienteController::class, 'buscarCliente']);
Route::delete('/deletar-cliente/{id}', [ClienteController::class, 'destroy']);

Route::put('/editar-cliente/{id}', [ClienteController::class, 'update']);
