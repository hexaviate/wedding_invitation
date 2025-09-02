<?php

namespace App\Http\Controllers;

use App\Models\Hadiah;
use App\Models\IsiUndangan;
use Illuminate\Http\Request;

class HadiahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isiUndangan = IsiUndangan::all();
        return view('admin.hadiah_create', compact('isiUndangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isiUndangan = IsiUndangan::all();
        return view('galeri.create', compact('isiUndangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Hadiah::create([
            'no_rekening1' => $request->no_rekening1,
            'no_rekening2' => $request->no_rekening2,
            'nama_bank1' => $request->nama_bank1,
            'nama_bank2' => $request->nama_bank2,
            // 'alamat' => $request->alamat,
            'isi_undangan_id' => $request->isi_undangan_id

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
