<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CON API
// LISTAR
//Route::apiResource('Index', CharacterController::class);

// OBTENER
//Route::resource('/Index', CharacterController::class);
/*
// CREAR
Route::post('/Index', [CharacterController::class, 'store']);

// OBTENER POR ID
Route::get('/Index/{id}', [CharacterController::class, 'show']);

// ACTUALIZAR
Route::put('/Index/{id}', [CharacterController::class, 'update']);

// ELIMINAR
Route::delete('/Index/{id}', [CharacterController::class, 'destroy']);

// SIN API MVC
//Route::resource('characters', CharacterController::class);*/

