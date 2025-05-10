<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ALaUne;
use App\Models\ImageALaUne;
use Illuminate\Support\Facades\Storage;

class ALaUneController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'presentation' => 'nullable|string',
            'image' => 'nullable|image',
            'date' => 'nullable|date',
            'active' => 'required|boolean',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('a_la_une_images', 'public');
        }
        ALaUne::create($data);
        return response()->json(['success' => true]);
    }

    public function update(Request $request, $id)
    {
        $aLaUne = ALaUne::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'presentation' => 'nullable|string',
            'image' => 'nullable|image',
            'date' => 'nullable|date',
            'active' => 'required|boolean',
        ]);
        if ($request->hasFile('image')) {
            if ($aLaUne->image) Storage::disk('public')->delete($aLaUne->image);
            $data['image'] = $request->file('image')->store('a_la_une_images', 'public');
        }
        $aLaUne->update($data);
        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        $aLaUne = ALaUne::with('images')->findOrFail($id);
        if ($aLaUne->image) Storage::disk('public')->delete($aLaUne->image);
        foreach ($aLaUne->images as $img) {
            if ($img->image_path) Storage::disk('public')->delete($img->image_path);
            $img->delete();
        }
        $aLaUne->delete();
        return response()->json(['success' => true]);
    }

    public function addImage(Request $request, $aLaUneId)
    {
        $data = $request->validate([
            'image_path' => 'required|image',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);
        $data['a_la_une_id'] = $aLaUneId;
        $data['image_path'] = $request->file('image_path')->store('a_la_une_images', 'public');
        ImageALaUne::create($data);
        return response()->json(['success' => true]);
    }

    public function deleteImage($imageId)
    {
        $img = ImageALaUne::findOrFail($imageId);
        if ($img->image_path) Storage::disk('public')->delete($img->image_path);
        $img->delete();
        return response()->json(['success' => true]);
    }
}