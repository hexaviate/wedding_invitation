<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.undangan_create');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.undangan_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Undangan::create([
            'slug' => $request->slug,
            'active' => $request->active
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $undangan = Undangan::with(
            'isiUndangan.cerita',
            'isiUndangan.galeri',
            'isiUndangan.hadiah',
            'isiUndangan.mempelaiL',
            'isiUndangan.mempelaiP',
            'isiUndangan.waktuDanTempat'
        )->where('slug', $slug)->firstOrFail();

        return view('index', compact('undangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
