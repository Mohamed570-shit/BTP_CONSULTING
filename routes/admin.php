<?php
use App\Http\Controllers\Admin\JobController;
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

    Route::get('/admin/notifications', [AdminController::class, 'notifications'])->name('admin.notifications');
    Route::get('/admin/spontaneous-applications', [AdminController::class, 'spontaneousApplications'])->name('admin.spontaneous-applications');

    // Qui sommes-nous
    Route::get('/about', [AdminController::class, 'about'])->name('admin.about');

    // Nos domaines
    Route::get('/domains', [AdminController::class, 'domains'])->name('admin.domains');

    // Projets
    Route::get('/projects', [AdminController::class, 'projects'])->name('admin.projects');

    // Départements
    Route::get('/departments', [AdminController::class, 'departments'])->name('admin.departments');

    // Offres d'emploi
    Route::get('/jobs', [JobController::class, 'index'])->name('admin.jobs');
    Route::get('/jobs/create', [JobController::class, 'create'])->name('admin.jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('admin.jobs.store');
    Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('admin.jobs.edit');
    Route::put('/jobs/{id}', [JobController::class, 'update'])->name('admin.jobs.update');
    Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('admin.jobs.destroy');
    Route::get('/jobs/{id}', [JobController::class, 'show'])->name('admin.jobs.show');
});
