<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'today']);
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/about', [PageController::class, 'about']);