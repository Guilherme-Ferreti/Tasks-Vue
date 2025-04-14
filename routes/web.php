<?php

declare(strict_types=1);

use App\Http\Controllers\TaskCategoryController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn () => Inertia::render('Welcome'))->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', fn () => Inertia::render('Dashboard'))->name('dashboard');

    Route::resource('tasks', TaskController::class)->except('show');
    Route::resource('task-categories', TaskCategoryController::class)->except('show');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
