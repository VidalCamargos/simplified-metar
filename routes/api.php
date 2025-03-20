<?php

use Illuminate\Support\Facades\Route;

Route::get('/ping', fn (): string => 'pong')->name('api.ping');
