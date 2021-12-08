<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProjectsController;
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
            Route::get('/', [ProjectsController::class, 'index'])->name('index');
            Route::get('/create', [ProjectsController::class, 'create'])->name('create');
            Route::post('/create', [ProjectsController::class, 'createSubmit'])->name('create-submit');
            Route::get('/{name}', [ProjectsController::class, 'details'])->name('details');

            Route::get('/{name}/edit', [ProjectsController::class, 'edit'])->name('edit');
            Route::put('/{name}/edit', [ProjectsController::class, 'editSubmit'])->name('edit-submit');

            Route::delete('/{name}/delete', [ProjectsController::class, 'deleteSubmit'])->name('delete-submit');
        });
    });


    Route::get('/history', function () {
        return Inertia::render('History');
    })->name('history');

    Route::get('/help', function () {
        return Inertia::render('Help');
    })->name('help');
});
