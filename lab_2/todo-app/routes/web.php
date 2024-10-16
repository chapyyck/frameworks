<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

// маршрут для главной страницы
Route::get('/', [HomeController::class, 'index'])->name('start');

// маршрут для страницы "О нас"
Route::get('/about', [HomeController::class, 'about'])->name('about');


Route::resource('tasks', TaskController::class)
    ->parameters(['tasks' => 'id']) // использовать 'id' в качестве имени параметра
    ->where(['id' => '[0-9]+']);
