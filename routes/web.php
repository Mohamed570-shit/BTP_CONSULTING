<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CandidatureController;

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProjetRecentsController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\QuiSommesNousController;
use App\Http\Controllers\SpontaneousApplicationController;

// Inclure les routes admin
require __DIR__.'/admin.php';
// Routes protégées pour l'administration
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// Routes d'authentification
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes protégées pour l'administration
// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'show'])->name('admin.profile');
    Route::put('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
});

// Route de gestion des utilisateurs
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('users', UserController::class)->names('admin.users');
});

// Les offres d'emploi (keep this one)
Route::get('/recrutement/offres-emploi', [JobController::class, 'offresEmploi'])->name('offres-emploi');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('jobs', JobController::class);
});


// Page authentification


Route::get('/admin/notifications', [NotificationController::class, 'index'])->name('admin.notifications');// Page d'accueil
Route::get('/', function () {
    return view('pages.index');
})->name('welcome'); // Added name for consistency



// Routes pour "Qui sommes-nous"
// ... existing code ...
Route::prefix('qui-sommes-nous')->group(function () {
    

    // Add this dynamic route:
    Route::get('/apropos', [QuiSommesNousController::class, 'aproposPublic'])->name('a-propos');
    Route::get('/apropos/image/{filename}', [QuiSommesNousController::class, 'showAproposImage'])->name('apropos.image');
    
    Route::get('/directeur', [QuiSommesNousController::class, 'directeurPublic'])->name('mot-directeur');
    Route::get('/motdg/image/{filename}', [QuiSommesNousController::class, 'showMotdgImage'])->name('motdg.image');

    Route::get('/valeurs', [QuiSommesNousController::class, 'valeursPublic'])->name('nos-valeurs');
    
    Route::get('/qui-sommes-nous/chiffres-cles', [QuiSommesNousController::class, 'chiffresPublic'])->name('chiffres-cles');
 
    Route::get('/certifications', function () {
        return view('pages.qui-sommes-nous.certifications');
    })->name('certifications');

    Route::get('/rayonnement', function () {
        return view('pages.qui-sommes-nous.rayonnement');
    })->name('rayonnement');

    Route::get('/gouvernance', function () {
        return view('pages.qui-sommes-nous.gouvernance');
    })->name('gouvernance');

    Route::get('/organigramme', function () {
        return view('pages.qui-sommes-nous.organigramme');
    })->name('organigramme');
});

// Routes pour "Domaines"
Route::prefix('domaines')->group(function () {
    Route::get('/liste', function () {
        return view('pages.domaines.liste');
    })->name('domaines.liste'); // Added name
});


// Routes pour "Réalisations"
Route::prefix('realisations')->group(function () {
    Route::get('/politiques-humaines', function () {
        return view('pages.realisations.politiques-humaines');
    })->name('politiques-humaines');


    Route::get('/projets-recents', [ProjetRecentsController::class, 'index'])->name('projets-recents');



    Route::get('/projets-recents', [ProjetRecentsController::class, 'index'])->name('projets-recents');


});
    Route::get('/secure-image/{id}', [ProjetRecentsController::class, 'secureImage']);
    Route::get('/ajax/projet/{id}', [ProjetRecentsController::class, 'ajaxShow']);
/// ... existing code ...
Route::get('/tous-les-projets', [ProjetRecentsController::class, 'carteProjets'])->name('tous-les-projets');
// ... existing code ...
// Routes pour "Management"
Route::prefix('management')->group(function () {
    Route::get('/etudes-techniques', function () {
        return view('pages.management.etudes-techniques');
    })->name('etudes-techniques');

    Route::get('/suivi-controle', function () {
        return view('pages.management.suivi-controle');
    })->name('suivi-controle');

    Route::get('/qualite-audit', function () {
        return view('pages.management.qualite-audit');
    })->name('qualite-audit');

    Route::get('/innovation-digitale', function () {
        return view('pages.management.innovation-digitale');
    })->name('innovation-ia');

    Route::get('/commercial-marketing', function () {
        return view('pages.management.commercial-marketing');
    })->name('commercial-marketing');

    Route::get('/rh-competences', function () {
        return view('pages.management.rh-competences');
    })->name('rh-competences');

    Route::get('/financier-comptabilite', function () {
        return view('pages.management.financier-comptabilite');
    })->name('financier-comptabilite');

    Route::get('/logistique-moyens', function () {
        return view('pages.management.logistique-moyens');
    })->name('logistique-moyens');
});

// Routes pour "Recrutement"
Route::prefix('recrutement')->group(function () {
    // Remove this conflicting route
    // Route::get('/offres-emploi', function () {
    //     return view('pages.recrutement.offres-emploi');
    // })->name('offres-emploi');

    Route::get('/candidature-spontanee', function () {
        return view('pages.recrutement.candidature-spontanee');
    })->name('candidature-spontanee');
});

// Route pour "Contact"
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Routes pour "Register" et "Login" (overridden by auth routes above, so remove or adjust)
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route pour les offres de stage (incomplete in your input, assuming placeholder)
Route::get('/recrutement/offres-stage', function () {
    return view('pages.recrutement.offres-stage');
})->name('offres-stage');


// ... existing code ...

// Les offres d'emploi (keep this one)
Route::get('/recrutement/offres-emploi', [JobController::class, 'offresEmploi'])->name('offres-emploi');
Route::post('/recrutement/offres/{id}/apply', [OffreController::class, 'apply'])->name('offres.apply');

// ... existing code ...

/// ... existing code ...

Route::prefix('recrutement')->group(function () {
    // Afficher le formulaire (GET)
    Route::get('/candidature-spontanee', [CandidatureController::class, 'create'])->name('candidature-spontanee');
    // Traiter le formulaire (POST)
    Route::post('/candidature-spontanee', [CandidatureController::class, 'store'])->name('candidature.store');
});

// ... existing code ...


Route::prefix('admin')->group(function () {
    Route::get('/projects', [ProjectController::class, 'index'])->name('admin.projects');
    Route::post('/projects', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/projects/{projet}', [ProjectController::class, 'show'])->name('admin.projects.show');
    Route::put('/projects/{projet}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/projects/{projet}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');
});

// Routes pour les requêtes AJAX (alignées avec le Blade)
Route::get('/projects/{id}', [ProjectController::class, 'show']);
Route::put('/projects/{projet}', [ProjectController::class, 'update']);
Route::delete('/projects/{projet}', [ProjectController::class, 'destroy']);




Route::get('/admin/spontaneous-applications', [SpontaneousApplicationController::class, 'index'])->name('admin.spontaneous-applications');
// ... existing code ...
Route::get('/admin/cv/{filename}', [SpontaneousApplicationController::class, 'downloadCv'])->name('admin.cv.download');
// ... existing code ...