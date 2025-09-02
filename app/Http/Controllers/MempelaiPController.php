<?php

namespace App\Http\Controllers;

use App\Models\IsiUndangan;
use App\Models\MempelaiP;
use Illuminate\Http\Request;

class MempelaiPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isiUndangan = IsiUndangan::all();
        return view('admin.mempelai_p_create', compact('isiUndangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isiUndangan = IsiUndangan::all();
        return view('admin.mempelai_p_create', compact('isiUndangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $foto = time() . '.' . $request->foto1->extension();
        $request->foto->move(public_path('foto_mempelai/'), $foto);

        MempelaiP::create([
            'nama' => $request->nama,
            'nama_panggilan' => $request->nama_panggilan,
            'nama_bapak' => $request->nama_bapak,
            'nama_ibu' => $request->nama_ibu,
            'alamat' => $request->alamat,
            'foto' => $foto,
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
