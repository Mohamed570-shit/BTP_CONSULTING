<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $section = $request->query('section', 'qui-sommes-nous');
        $pages = Page::where('section', $section)->get();
        return response()->json($pages);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'section' => 'required|string',
            'is_active' => 'boolean',
        ]);

        $page = new Page();
        $page->title = $validated['title'];
        $page->section = $validated['section'];
        $page->content = $validated['content'];
        $page->is_active = $request->has('is_active');
        
        // Génération d'un slug unique
        $baseSlug = Str::slug($validated['title']);
        $slug = $baseSlug;
        $counter = 1;
        
        while (Page::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        
        $page->slug = $slug;
        $page->save();

        return response()->json($page, 201);
    }

    public function show($id)
    {
        $page = Page::findOrFail($id);
        return response()->json($page);
    }

    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_active' => 'boolean',
        ]);

        if ($validated['title'] !== $page->title) {
            $baseSlug = Str::slug($validated['title']);
            $slug = $baseSlug;
            $counter = 1;

            while (Page::where('slug', $slug)->where('id', '!=', $page->id)->exists()) {
                $slug = $baseSlug . '-' . $counter;
                $counter++;
            }
            $page->slug = $slug;
        }

        $page->title = $validated['title'];
        $page->content = $validated['content'];
        $page->is_active = $request->has('is_active');
        
        $page->save();

        return response()->json($page);
    }

    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        return response()->json(null, 204);
    }
}