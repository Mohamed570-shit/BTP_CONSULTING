<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidature;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CandidaturesExport;

class SpontaneousApplicationController extends Controller
{
    // ... existing code ...


    public function deleteSelected(Request $request)
    {
        $ids = $request->input('ids', []);
        if (!empty($ids)) {
            Candidature::whereIn('id', $ids)->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }



public function exportSelected(Request $request)
{
    $ids = $request->input('ids', []);
    if (empty($ids)) {
        return back()->with('error', 'Aucune candidature sélectionnée.');
    }
    return Excel::download(new CandidaturesExport($ids), 'candidatures_export.xlsx');
}
}