<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssignmentController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'storeRegister']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'storeLogin']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('role:admin');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('assignments', AssignmentController::class);
});

Route::get('/assignments/create', [AssignmentController::class, 'create'])->name('assignments.create')->middleware(['auth', 'role:admin']);
Route::post('/assignments', [AssignmentController::class, 'store'])->name('assignments.store')->middleware(['auth', 'role:admin']);

Route::get('/assignments/{assignment}/edit', [AssignmentController::class, 'edit'])->name('assignments.edit')->middleware(['auth', 'role:admin']);
Route::put('/assignments/{assignment}', [AssignmentController::class, 'update'])->name('assignments.update')->middleware(['auth', 'role:admin']);

