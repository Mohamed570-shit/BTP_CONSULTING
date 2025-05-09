<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Admin\DomaineController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\QuiSommesNousController;
use App\Http\Controllers\Admin\SpontaneousApplicationController;
use App\Http\Controllers\Assistant\AssistantDashboardController;
use App\Http\Controllers\Admin\UserController; // Add this import

    Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


    // Route::middleware(['auth', 'role:admin'])->group(function () {
    //     Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    //     Route::post('/admin/users/store', [UserController::class, 'store'])->name('admin.users.store');
    //     Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    //     Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');

    // Route::middleware(['auth', 'role:admin'])->group(function () {
    //     // User management routes
    //     Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    //     Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    //     Route::post('/users/store', [UserController::class, 'store'])->name('admin.users.store');
    //     Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    //     Route::put('/users/{id}', [UserController::class, 'update'])->name('admin.users.update');


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


    
    
    
        // Nos domaines
        Route::get('/domains', [AdminController::class, 'domains'])->name('admin.domains');
        Route::post('/domaines', [DomaineController::class, 'store'])->name('admin.domaines.store');
        Route::put('/domaines/{id}', [DomaineController::class, 'update'])->name('admin.domaines.update');
        Route::delete('/domaines/{id}', [DomaineController::class, 'destroy'])->name('admin.domaines.destroy');

        Route::post('/cartes', [DomaineController::class, 'storeCarte'])->name('admin.cartes.store');
        Route::put('/cartes/{id}', [DomaineController::class, 'updateCarte'])->name('admin.cartes.update');
        Route::delete('/cartes/{id}', [DomaineController::class, 'destroyCarte'])->name('admin.cartes.destroy');

        Route::post('/images', [DomaineController::class, 'storeImage'])->name('admin.images.store');
        Route::put('/images/{id}', [DomaineController::class, 'updateImage'])->name('admin.images.update');
        Route::delete('/images/{id}', [DomaineController::class, 'destroyImage'])->name('admin.images.destroy');

        Route::get('/domain-image/{filename}', [AdminController::class, 'showDomainImage'])->name('admin.domain.image');




   

    // Projets
    Route::get('/projects', [AdminController::class, 'projects'])->name('admin.projects');

    Route::get('/projects', [ProjectController::class, 'index'])->name('admin.projects');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('admin.projects.show');
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');

    // route pour images des projets
    Route::get('/project-image/{filename}', function ($filename) {
        $path = storage_path('app/public/projets/' . $filename);

        if (!\Illuminate\Support\Facades\File::exists($path)) {
            abort(404);
        }
        $file = \Illuminate\Support\Facades\File::get($path);
        $type = \Illuminate\Support\Facades\File::mimeType($path);
        return response($file, 200)->header("Content-Type", $type);
    });
       // les routes pour projets recents

    // Départements
    Route::get('/departments', [AdminController::class, 'departments'])->name('admin.departments');
// ... existing code ...

// Départements
Route::get('/departments', [AdminController::class, 'departments'])->name('admin.departments');
Route::post('/departments', [DepartmentController::class, 'store'])->name('admin.departments.store');
Route::put('/departments/{id}', [DepartmentController::class, 'update'])->name('admin.departments.update');
Route::delete('/departments/{id}', [DepartmentController::class, 'destroy'])->name('admin.departments.destroy');

// Cartes Département
Route::post('/cart-departements', [DepartmentController::class, 'storeCart'])->name('admin.cartdepartements.store');
Route::put('/cart-departements/{id}', [DepartmentController::class, 'updateCart'])->name('admin.cartdepartements.update');
Route::delete('/cart-departements/{id}', [DepartmentController::class, 'destroyCart'])->name('admin.cartdepartements.destroy');
Route::get('/cart-image/{filename}', [App\Http\Controllers\AdminController::class, 'showCartImage'])->name('admin.cart.image');


// Offres d'emploi
    Route::get('/jobs', [JobController::class, 'index'])->name('admin.jobs');
    Route::get('/jobs/create', [JobController::class, 'create'])->name('admin.jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('admin.jobs.store');
    Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('admin.jobs.edit');
    Route::put('/jobs/{id}', [JobController::class, 'update'])->name('admin.jobs.update');
    Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('admin.jobs.destroy');
    Route::get('/jobs/{id}', [JobController::class, 'show'])->name('admin.jobs.show');




// Qui sommes-nous admin
        //propos
        Route::get('/about', [AdminController::class, 'about'])->name('admin.about');
        Route::get('/apropos-image/{filename}', [AdminController::class, 'showAproposImage'])->name('apropos.image');
        Route::put('/admin/apropos/update', [QuiSommesNousController::class, 'update'])->name('admin.apropos.update');


    // Khlli hadchi:

        //mot directeur général
        Route::put('/motdg/update', [QuiSommesNousController::class, 'updateMotdg'])->name('admin.motdg.update');
        Route::get('/motdg-image/{filename}', [AdminController::class, 'showMotdgImage'])->name('motdg.image');

        // valeurs
        Route::post('/valeurs/store', [QuiSommesNousController::class, 'storeValeur'])->name('admin.valeurs.store');
        Route::delete('/valeurs/{id}', [QuiSommesNousController::class, 'destroyValeur'])->name('admin.valeurs.destroy');
        Route::put('/valeurs/{id}', [QuiSommesNousController::class, 'updateValeur'])->name('admin.valeurs.update');

        // chiffres
        Route::post('/chiffres/store', [QuiSommesNousController::class, 'storeChiffre'])->name('admin.chiffres.store');
        Route::put('/chiffres/{id}', [QuiSommesNousController::class, 'updateChiffre'])->name('admin.chiffres.update');
        Route::delete('/chiffres/{id}', [QuiSommesNousController::class, 'destroyChiffre'])->name('admin.chiffres.destroy');

        // ... existing code ...


Route::get('/about', [AdminController::class, 'about'])->name('admin.about');

// Politique CRUD
Route::post('/politiques', [QuiSommesNousController::class, 'storePolitique'])->name('admin.politiques.store');
Route::put('/politiques/{id}', [QuiSommesNousController::class, 'updatePolitique'])->name('admin.politiques.update');
Route::delete('/politiques/{id}', [QuiSommesNousController::class, 'destroyPolitique'])->name('admin.politiques.destroy');
Route::get('/politique-image/{filename}', [AdminController::class, 'politiqueImage'])->name('admin.politique.image');



// Organigramme CRUD
Route::post('/organigramme', [QuiSommesNousController::class, 'storeOrganigramme'])->name('admin.organigramme.store');
Route::put('/organigramme/{id}', [QuiSommesNousController::class, 'updateOrganigramme'])->name('admin.organigramme.update');
Route::delete('/organigramme/{id}', [QuiSommesNousController::class, 'destroyOrganigramme'])->name('admin.organigramme.destroy');
Route::get('/organigramme-image/{filename}', [AdminController::class, 'organigrammeImage'])->name('admin.organigramme.image');





// Assistance Projects Routes
Route::prefix('assistant')->middleware(['auth'])->group(function () {
    Route::get('/projects', [AssistantDashboardController::class, 'index'])->name('assistant.projects');
    Route::get('/projects/create', [AssistantDashboardController::class, 'create'])->name('assistant.projects.create');
    Route::post('/projects', [AssistantDashboardController::class, 'store'])->name('assistant.projects.store');
    Route::get('/projects/{id}', [AssistantDashboardController::class, 'show'])->name('assistant.projects.show');
    Route::get('/projects/{id}/edit', [AssistantDashboardController::class, 'edit'])->name('assistant.projects.edit');
    Route::put('/projects/{id}', [AssistantDashboardController::class, 'update'])->name('assistant.projects.update');
    Route::delete('/projects/{id}', [AssistantDashboardController::class, 'destroy'])->name('assistant.projects.destroy');
});


// ... existing code ...


// ... existing code ...
});
