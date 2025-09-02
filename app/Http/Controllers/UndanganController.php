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
        $cover = time() . '.' . $request->cover->extension();
        $request->cover->move(public_path('foto_mempelai/'), $cover);

        Undangan::create([
            'slug' => $request->slug,
            'active' => $request->active,
            'nama_keluarga1' => $request->nama_keluarga1,
            'nama_keluarga2' => $request->nama_keluarga2,
            'cover' => $cover,
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
