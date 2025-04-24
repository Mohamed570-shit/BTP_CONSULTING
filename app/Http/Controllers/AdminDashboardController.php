<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Projet; // Changed from Project to Projet
use App\Models\Candidature;
use App\Models\OffreEmploi; // Changed from Offre to OffreEmploi


class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalAdmins = User::where('role', 'admin')->count();
        $totalProjects = Projet::count(); // Changed from Project to Projet
        $totalOffers = OffreEmploi::count(); // Changed from Offre to OffreEmploi
        // Comptez toutes les candidatures pour l'instant
        $totalCandidatures = Candidature::count();

        return view('admin.dashboard', compact('totalUsers', 'totalAdmins', 'totalProjects', 'totalCandidatures', 'totalOffers'));
    }
}
