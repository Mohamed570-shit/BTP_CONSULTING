<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Gestion des utilisateurs
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('admin.users.store');
    Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/users/{user}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('/users/{user}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
    Route::get('/users/{user}/code', [AdminController::class, 'showUserCode'])->name('admin.users.show-code');
    
    // Qui sommes-nous
    Route::get('/about', [AdminController::class, 'about'])->name('admin.about');
    
    // Nos domaines
    Route::get('/domains', [AdminController::class, 'domains'])->name('admin.domains');
    
    // Projets
    Route::get('/projects', [AdminController::class, 'projects'])->name('admin.projects');
    
    // Départements
    Route::get('/departments', [AdminController::class, 'departments'])->name('admin.departments');
    
    // Offres d'emploi
    Route::get('/jobs', [AdminController::class, 'jobs'])->name('admin.jobs');
});