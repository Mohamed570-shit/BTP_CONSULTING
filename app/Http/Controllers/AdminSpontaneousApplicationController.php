<?php

namespace App\Http\Controllers;

use App\Models\Candidature;

class AdminSpontaneousApplicationController extends Controller
{
    public function index()
{
    $applications = \App\Models\Candidature::latest()->get(); // Remove whereNull('offre_id') for testing
    return view('admin.spontaneous-applications', compact('applications'));
}
}