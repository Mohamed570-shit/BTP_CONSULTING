<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AdminActionNotification;

class SpontaneousApplicationController extends Controller
{
    public function index()
{
    $offres = \App\Models\OffreEmploi::all();
    $candidatures = \App\Models\Candidature::all();
    return view('admin.spontaneous-applications', compact('offres', 'candidatures'));
}

public function downloadCv($filename)
{
    $fullPath = storage_path('app/public/cvs/' . $filename);

    if (!file_exists($fullPath)) {
        abort(404, 'File not found');
    }

    return response()->file($fullPath, [
        'Content-Type' => mime_content_type($fullPath),
        'Content-Disposition' => 'inline; filename="' . $filename . '"'
    ]);
}

}
