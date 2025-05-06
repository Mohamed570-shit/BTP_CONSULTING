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
        $data = $request->only(['departement_id', 'title', 'icon', 'description']);

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('cart_images', 'public');
            $data['image'] = basename($imagePath);
        }

        CartDepartement::create($data);
        return back()->with('success', 'Carte ajoutée');
    }

// ... existing code ...

    // Modifier carte
    public function updateCart(Request $request, $id)
    {
        $carte = CartDepartement::findOrFail($id);
        $data = $request->only(['title', 'icon', 'description']);

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('cart_images', 'public');
            $data['image'] = basename($imagePath);
        }

        $carte->update($data);
        return back()->with('success', 'Carte modifiée');
    }

// ... existing code ...

    // Supprimer carte
    public function destroyCart($id)
    {
        $carte = CartDepartement::findOrFail($id);
        $carte->delete();
        return back()->with('success', 'Carte supprimée');
    }
}
