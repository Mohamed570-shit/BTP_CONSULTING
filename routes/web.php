<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

// Page d'accueil
Route::get('/', function () {
    return view('pages.index');
});

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
    })->name('');
});

// Routes pour "Réalisations"
Route::prefix('realisations')->group(function () {
    
    Route::get('/politiques-humaines', function () {
        return view('pages.realisations.politiques-humaines');
    })->name('politiques-humaines');

    
    Route::get('/projets-recents', function () {
        return view('pages.realisations.projets-recents');
    })->name('projets-recents');

    
    Route::get('/tous-les-projets', function () {
        return view('pages.realisations.tous-les-projets');
    })->name('tous-les-projets');
    
});

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
    Route::get('/offres-emploi', function () {
        return view('pages.recrutement.offres-emploi');
    })->name('offres-emploi');
    
    Route::get('/candidature-spontanee', function () {
        return view('pages.recrutement.candidature-spontanee');
    })->name('candidature-spontanee');
});

// Route pour "Contact" (je suppose qu'il manque un fichier contact.blade.php)
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Routes pour "Register" et "Login"
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');