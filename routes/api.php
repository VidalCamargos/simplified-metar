<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/ping', fn (): string => 'pong')->name('api.ping');

Route::post('/register', [AuthController::class, 'register'])->name('api.register');
Route::get('/login', [AuthController::class, 'login'])->name('api.login');
