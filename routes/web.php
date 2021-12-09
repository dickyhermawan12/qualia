<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LiveSessionController;
use App\Http\Middleware\RedirectIfAuthenticated;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->middleware(RedirectIfAuthenticated::class);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::prefix('projects')->group(function() {
        Route::name('projects.')->group(function() {
            Route::get('/', [ProjectController::class, 'index'])->name('index');
            Route::get('/create', [ProjectController::class, 'create'])->name('create');
            Route::post('/create', [ProjectController::class, 'createSubmit'])->name('create-submit');
            Route::get('/{name}', [ProjectController::class, 'details'])->name('details');
            Route::get('/{name}/edit', [ProjectController::class, 'edit'])->name('edit');
            Route::put('/{name}/edit', [ProjectController::class, 'editSubmit'])->name('edit-submit');
            Route::delete('/{name}/delete', [ProjectController::class, 'deleteSubmit'])->name('delete-submit');
        });
    });

    Route::prefix('{name}/livesessions')->group(function() {
        Route::name('livesessions.')->group(function() {
            Route::get('/create', [LiveSessionController::class, 'create'])->name('create');
            Route::post('/create', [LiveSessionController::class, 'createSubmit'])->name('create-submit');
            Route::get('/{id}/edit', [LiveSessionController::class, 'edit'])->name('edit');
            Route::put('/{id}/edit', [LiveSessionController::class, 'editSubmit'])->name('edit-submit');
            Route::delete('/{id}/delete', [LiveSessionController::class, 'deleteSubmit'])->name('delete-submit');
        });
    });

    Route::get('/help', function () {
        return Inertia::render('Help');
    })->name('help');
});
