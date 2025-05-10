<?php
namespace App\Http\Controllers\Rh;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidature;
use App\Models\OffreEmploi;

class DashboardController extends Controller
{
    public function index()
    {
        $totalOffers = OffreEmploi::count();
        $totalCandidatures = Candidature::count();

        return view('rh.dashboard', compact('totalOffers', 'totalCandidatures'));
    }

}
