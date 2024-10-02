<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Rota inicial
Route::get('/', function () {
    return view('welcome');
});

// Rota para armazenar dados do usuário
Route::post('/user', [UserController::class, 'store']);
