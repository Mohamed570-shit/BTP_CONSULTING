<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\CartDepartement;

class DepartmentController extends Controller
{
    // Ajouter département
    public function store(Request $request)
    {
        Departement::create($request->only(['title', 'subtitle', 'description']));
        return back()->with('success', 'Département ajouté');
    }

    // Modifier département
    public function update(Request $request, $id)
    {
        $dep = Departement::findOrFail($id);
        $dep->update($request->only(['title', 'subtitle', 'description']));
        return back()->with('success', 'Département modifié');
    }

    // Supprimer département (w cart li 3ando)
    public function destroy($id)
    {
        $dep = Departement::findOrFail($id);
        $dep->delete();
        return back()->with('success', 'Département supprimé');
    }

    // Ajouter carte
    public function storeCart(Request $request)
    {
        CartDepartement::create($request->only(['departement_id', 'title', 'icon', 'description', 'image']));
        return back()->with('success', 'Carte ajoutée');
    }

    // Modifier carte
    public function updateCart(Request $request, $id)
    {
        $carte = CartDepartement::findOrFail($id);
        $carte->update($request->only(['title', 'icon', 'description', 'image']));
        return back()->with('success', 'Carte modifiée');
    }

    // Supprimer carte
    public function destroyCart($id)
    {
        $carte = CartDepartement::findOrFail($id);
        $carte->delete();
        return back()->with('success', 'Carte supprimée');
    }
}
