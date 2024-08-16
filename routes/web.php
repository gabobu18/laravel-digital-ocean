<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'getUsers']);
Route::get('/seed-user', [UserController::class, 'seedUser']);