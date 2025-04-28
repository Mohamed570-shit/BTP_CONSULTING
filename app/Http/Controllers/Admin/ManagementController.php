<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Management::orderBy('order')->get();
        return view('admin.management.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.management.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'active' => 'boolean',
            'order' => 'required|integer',
        ]);

        Management::create($validated);

        return redirect()->route('admin.management.index')
            ->with('success', 'تم إنشاء القسم بنجاح.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Management $management)
    {
        return view('admin.management.show', compact('management'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Management $management)
    {
        return view('admin.management.edit', compact('management'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Management $management)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'active' => 'boolean',
            'order' => 'required|integer',
        ]);

        $management->update($validated);

        return redirect()->route('admin.management.index')
            ->with('success', 'تم تحديث القسم بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Management $management)
    {
        $management->delete();

        return redirect()->route('admin.management.index')
            ->with('success', 'تم حذف القسم بنجاح.');
    }
}
