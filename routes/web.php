<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\index2Controller;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\productsController;

Route::get('/', [blogController::class, 'index']);
Route::get('/orders', [ordersController::class, 'index']);
Route::get('/products', [productsController::class, 'index']);
Route::get('/users', [usersController::class, 'index']);
Route::get('/index2', [index2Controller::class, 'index']);
