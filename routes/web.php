<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProjetRecentsController;

// Inclure les routes admin
require __DIR__.'/admin.php';

// Routes d'authentification
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes protégées pour l'administration
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

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
// ... code li kayn ...
Route::post('/offres/{id}/apply', [\App\Http\Controllers\OffreController::class, 'apply'])->name('offres.apply');
// ... code li kayn ...

// Page authentification
Route::get('/admin/notifications', [NotificationController::class, 'index'])->name('admin.notifications');
Route::post('/admin/notifications/{id}/read', [NotificationController::class, 'markAsRead'])->name('admin.notifications.read');

// Page d'accueil
Route::get('/', function () {
    return view('pages.index');
})->name('welcome'); // Added name for consistency



// Routes pour "Qui sommes-nous"
Route::prefix('qui-sommes-nous')->group(function () {
    Route::get('/apropos', function () {
        return view('pages.qui-sommes-nous.apropos');
    })->name('a-propos');

    Route::get('/directeur', function () {
        return view('pages.qui-sommes-nous.directeur');
    })->name('mot-directeur');

    Route::get('/valeurs', function () {
        return view('pages.qui-sommes-nous.valeurs');
    })->name('nos-valeurs');

    Route::get('/chiffres-cles', function () {
        return view('pages.qui-sommes-nous.chiffres-cles');
    })->name('chiffres-cles');

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
    // Route::get('/tous-les-projets', function () {
    //     return view('pages.realisations.tous-les-projets');
    // })->name('tous-les-projets');
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
// ... existing code ...
Route::post('/candidature-spontanee', [\App\Http\Controllers\CandidatureController::class, 'store'])->name('candidature.store');
// ... existing code ...
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
})->name('offres-stage');Route::get('/admin/spontaneous-applications', [AdminSpontaneousApplicationController::class, 'index'])->name('admin.spontaneous-applications');


Route::get('/admin/spontaneous-applications', [\App\Http\Controllers\AdminSpontaneousApplicationController::class, 'index'])->name('admin.spontaneous-applications');// ... existing code ...
Route::post('/offres/{id}/apply', [\App\Http\Controllers\CandidatureController::class, 'store'])->name('offres.apply');
// ... existing code ...
