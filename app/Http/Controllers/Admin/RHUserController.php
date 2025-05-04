<?php
namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RHUserController extends Controller
{
    // Méthode pour afficher le tableau de bord RH
    public function dashboardRH()
    {
        // Tu peux passer des données à la vue ici si nécessaire
        return view('admin.dashboard.rh'); // La vue de ton tableau de bord RH
    }

    
}
