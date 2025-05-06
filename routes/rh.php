<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RHController;
// use App\Http\Controllers\Admin\UserController; // Add this import

// // Routes pour le rôle RH
// Route::middleware(['auth', 'role:rh'])->prefix('rh')->group(function () {
//     // Tableau de bord RH
//     Route::get('/dashboard', [RHController::class, 'dashboard'])->name('rh.dashboard');

//     // Gestion des offres d'emploi
//     Route::get('/jobs', [RHController::class, 'jobs'])->name('rh.jobs');

//     // Gestion des candidatures spontanées
//     Route::get('/applications', [RHController::class, 'applications'])->name('rh.applications');
// });