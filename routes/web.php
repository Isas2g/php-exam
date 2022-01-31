<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\AuthController;

Route::get('/', [MainController::class, 'index']);
Route::get('/reg', [AuthController::class, 'registrationPage']);
Route::get('/login', [AuthController::class, 'loginPage']);
