<?php
namespace App\Http\Controllers\Admin;

use App\Models\ALaUne;
use App\Models\ImageALaUne;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ALaUneController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'presentation' => 'nullable',
            'date' => 'nullable|date',
            'image' => 'nullable|image',
            
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('a_la_une_images', 'public');
        }
        ALaUne::create($data);
        return redirect()->route('admin.a_la_une_admin');
    }

    public function update(Request $request, $id)
    {
        $aLaUne = ALaUne::findOrFail($id);
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'presentation' => 'nullable',
            'date' => 'nullable|date',
            'image' => 'nullable|image',
            
        ]);
        if ($request->hasFile('image')) {
            if ($aLaUne->image) Storage::disk('public')->delete($aLaUne->image);
            $data['image'] = $request->file('image')->store('a_la_une_images', 'public');
        }
        $aLaUne->update($data);
        return redirect()->route('admin.a_la_une_admin', ['id' => $aLaUne->id]);
    }

    public function destroy($id)
    {
        $aLaUne = ALaUne::findOrFail($id);
        if ($aLaUne->image) Storage::disk('public')->delete($aLaUne->image);
        $aLaUne->delete();
        return redirect()->route('admin.a_la_une_admin');
    }


    

public function addImage(Request $request, $id)
{
    $request->validate([
        'image_path' => 'required|image',
    ]);
    $path = $request->file('image_path')->store('a_la_une_images', 'public');
    ImageALaUne::create([
        'a_la_une_id' => $id,
        'image_path' => $path,
    ]);
    return redirect()->route('admin.a_la_une_admin', ['id' => $id]);
}

public function updateImage(Request $request, $imageId)
{
    $img = ImageALaUne::findOrFail($imageId);
    if ($request->hasFile('image_path')) {
        Storage::disk('public')->delete($img->image_path);
        $img->image_path = $request->file('image_path')->store('a_la_une_images', 'public');
        $img->save();
    }
    return redirect()->route('admin.a_la_une_admin', ['id' => $img->a_la_une_id]);
}

public function deleteImage($imageId)
{
    $img = ImageALaUne::findOrFail($imageId);
    $aLaUneId = $img->a_la_une_id;
    Storage::disk('public')->delete($img->image_path);
    $img->delete();
    return redirect()->route('admin.a_la_une_admin', ['id' => $aLaUneId]);
}
}