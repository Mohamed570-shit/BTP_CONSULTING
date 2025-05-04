<?php

namespace App\Http\Controllers\Admin;

use App\Models\Carte;
use App\Models\Image;
use App\Models\Domaine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DomaineController extends Controller
{
   
public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'icon' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'question' => 'nullable|string|max:255',
        'reponse' => 'nullable|string',
    ]);

    Domaine::create([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'icon' => $request->icon,
        'description' => $request->description,
        'question' => $request->question,
        'reponse' => $request->reponse,
    ]);

    return redirect()->back()->with('success', 'Domaine ajouté avec succès');
}

public function storeCarte(Request $request)
{
    $request->validate([
        'domaine_id' => 'required|exists:domaines,id',
        'title' => 'required|string|max:255',
        'icon' => 'nullable|string|max:255',
        'description' => 'nullable|string',
    ]);

    Carte::create([
        'domaine_id' => $request->domaine_id,
        'title' => $request->title,
        'icon' => $request->icon,
        'description' => $request->description,
    ]);

    return redirect()->back()->with('success', 'Carte ajoutée avec succès');
}

public function storeImage(Request $request)
{
    $request->validate([
        'domaine_id' => 'required|exists:domaines,id',
        'image' => 'required|image|max:2048',
    ]);

    $path = $request->file('image')->store('domaines', 'public');

    Image::create([
        'domaine_id' => $request->domaine_id,
        'image' => $path,
    ]);

    return redirect()->back()->with('success', 'Image ajoutée avec succès');
}

public function update(Request $request, $id)
{
    $domaine = Domaine::findOrFail($id);
    $domaine->update($request->only(['title', 'subtitle', 'icon', 'description', 'question', 'reponse']));
    return redirect()->back()->with('success', 'Domaine modifié avec succès');
}


public function updateCarte(Request $request, $id)
{
    $carte = Carte::findOrFail($id);
    $carte->update($request->only(['title', 'icon', 'description']));
    return redirect()->back()->with('success', 'Carte modifiée avec succès');
}

public function destroyCarte($id)
{
    $carte = Carte::findOrFail($id);
    $carte->delete();
    return redirect()->back()->with('success', 'Carte supprimée avec succès');
}

public function updateImage(Request $request, $id)
{
    $image = Image::findOrFail($id);
    if ($request->hasFile('image')) {
        // Remove old image
        if ($image->image && Storage::disk('public')->exists($image->image)) {
            Storage::disk('public')->delete($image->image);
        }
        $path = $request->file('image')->store('domaines', 'public');
        $image->image = $path;
    }
    $image->save();
    return redirect()->back()->with('success', 'Image modifiée avec succès');
}

public function destroyImage($id)
{
    $image = Image::findOrFail($id);
    if ($image->image && Storage::disk('public')->exists($image->image)) {
        Storage::disk('public')->delete($image->image);
    }
    $image->delete();
    return redirect()->back()->with('success', 'Image supprimée avec succès');
}

public function destroy($id)
{
    $domaine = \App\Models\Domaine::findOrFail($id);

    // Delete related images from storage and DB
    foreach ($domaine->images as $image) {
        if ($image->image && Storage::disk('public')->exists($image->image)) {
            Storage::disk('public')->delete($image->image);
        }
        $image->delete();
    }

    // Delete related cards
    foreach ($domaine->cartes as $carte) {
        $carte->delete();
    }

    // Delete the domain itself
    $domaine->delete();

    return redirect()->route('admin.domains')->with('success', 'Domaine et toutes ses données associées supprimés avec succès.');
}

}