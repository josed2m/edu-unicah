<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/carreras', [CarreraController::class, 'index'])->name('carreras.index');
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
    Route::get('/alumnos/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');

    Route::get('/carreras/create', [CarreraController::class, 'create'])->name('carreras.create');
    Route::get('/carreras/edit', [CarreraController::class, 'edit'])->name('carreras.edit');

    Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
    Route::get('/cursos/edit', [CursoController::class, 'edit'])->name('cursos.edit');
});

require __DIR__.'/auth.php';
