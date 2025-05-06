<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use App\Models\Job;
// use App\Models\SpontaneousApplication;

// class RHController extends Controller
// {
//     /**
//      * Constructeur avec middleware d'authentification
//      */
//     public function __construct()
//     {
//         $this->middleware('auth');
//         $this->middleware('role:rh');
//     }

//     /**
//      * Affiche le tableau de bord RH
//      */
//     public function dashboard()
//     {
//         $totalJobs = Job::count();
//         $totalApplications = SpontaneousApplication::count();

//         return view('rh.dashboard', compact('totalJobs', 'totalApplications'));
//     }

//     /**
//      * Affiche la liste des offres d'emploi
//      */
//     public function jobs()
//     {
//         $jobs = Job::all();
//         return view('rh.jobs.index', compact('jobs'));
//     }

//     /**
//      * Affiche la liste des candidatures spontanées
//      */
//     public function applications()
//     {
//         $applications = SpontaneousApplication::latest()->get();
//         return view('rh.applications.index', compact('applications'));
//     }
// }
