<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pertunjukan;
use Illuminate\Http\Request;

class PertunjukanController extends Controller
{
    public function index()
    {
        $pertunjukans = Pertunjukan::all();

        return view('admin.pertunjukan.index', compact('pertunjukans'));
    }

    public function create()
    {
        return view('admin.pertunjukan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|string|max:100',
            'time' => 'required|string|max:100',
            'price_domestic' => 'required|numeric|min:0',
            'price_foreign' => 'required|numeric|min:0',
            'quota' => 'required|integer|min:0',
            'description' => 'required|string',
            'image' => 'nullable|string|max:255',
        ]);

        Pertunjukan::create($data);

        return redirect()->route('admin.pertunjukan.index')
            ->with('success', 'Pertunjukan berhasil ditambahkan.');
    }

    public function show(Pertunjukan $pertunjukan)
    {
        return redirect()->route('admin.pertunjukan.index');
    }

    public function edit(Pertunjukan $pertunjukan)
    {
        return view('admin.pertunjukan.edit', compact('pertunjukan'));
    }

    public function update(Request $request, Pertunjukan $pertunjukan)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|string|max:100',
            'time' => 'required|string|max:100',
            'price_domestic' => 'required|numeric|min:0',
            'price_foreign' => 'required|numeric|min:0',
            'quota' => 'required|integer|min:0',
            'description' => 'required|string',
            'image' => 'nullable|string|max:255',
        ]);

        $pertunjukan->update($data);

        return redirect()->route('admin.pertunjukan.index')
            ->with('success', 'Pertunjukan berhasil diperbarui.');
    }

    public function destroy(Pertunjukan $pertunjukan)
    {
        $pertunjukan->delete();

        return redirect()->route('admin.pertunjukan.index')
            ->with('success', 'Pertunjukan berhasil dihapus.');
    }
}
