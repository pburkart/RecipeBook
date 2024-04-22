<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ProfileController;

use App\Http\Middleware\AdminMiddleware;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Users */

Route::get('/users', [UserController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->middleware(AdminMiddleware::class)
    ->name('users.index');

/* Calendar Module */

Route::get('/calendar', [CalendarController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('calendar.index');
    
/* Widgets */

Route::resource('widgets', WidgetsController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::get('/widgets', [WidgetsController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('widgets.index');

Route::get('/widgets/create', [WidgetsController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('widgets.create');

Route::post('/widgets/store', [WidgetsController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('widgets.store');

/* Budget Module */

Route::get('/budget', [BudgetController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('budget.index');

/* Settings Module */

Route::get('/settings', [SettingsController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('settings.index');

require __DIR__.'/auth.php';
