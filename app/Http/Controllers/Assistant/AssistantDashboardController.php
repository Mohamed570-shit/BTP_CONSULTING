<?php

namespace App\Http\Controllers\Assistant;

use App\Http\Controllers\Controller;
use App\Models\Projet;

class AssistantDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Fetch the total number of projects
        $totalProjects = Projet::count();

        return view('assistant.dashboard', compact('totalProjects'));
    }

    public function projects()
    {
        // Fetch all projects for the projects view
        $projets = Projet::all();

        return view('assistant.projects', compact('projets'));
    }
}
