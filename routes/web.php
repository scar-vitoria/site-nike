<?php

use App\Http\Controllers\ItemController;

use Illuminate\Support\Facades\Route;

/*Mostra todos os registros*/
Route::get('/', [ItemController::class, 'index']);
/*Mostra o formulário criar*/
Route::get('/tenis/create', [ItemController::class, 'create'])->middleware('auth');
/*Mostrar um dado especifico*/
Route::get('/tenis/{id}', [ItemController::class, 'show']);
/*Enviar os dados pro banco*/
Route::post('/tenis', [ItemController::class, 'store']);

Route::delete('/tenis/{id}', [ItemController::class, 'destroy']);
Route::get('/dashboard', [ItemController::class, 'dashboard'])->middleware('auth');
Route::get('/tenis/edit/{id}', [ItemController::class, 'edit'])->middleware('auth');
Route::put('/tenis/update/{id}', [ItemController::class, 'update'])->middleware('auth');
Route::post('/tenis/join/{id}', [ItemController::class, 'joinItem'])->middleware('auth');
Route::delete('/tenis/leave/{id}', [ItemController::class, 'leaveItem'])->middleware('auth');

Route::get('/tenis', function () {
    return view('tenis');
});

