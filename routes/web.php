<?php

use Illuminate\Support\Facades\Route;
use app\http\controllers;

Route::get('/', [indexController::class, 'index']);
Route::get('/show', [indexController::class, 'show']);
