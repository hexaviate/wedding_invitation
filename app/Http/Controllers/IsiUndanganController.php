<?php

namespace App\Http\Controllers;

use App\Models\IsiUndangan;
use App\Models\Undangan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IsiUndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $undangan = Undangan::where('active', 'yes')->get();
        return view('admin.isi_undangan_create', compact('undangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $undangan = Undangan::where('active', 'yes');
        return view('isiUndangan.create', compact('undangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $waktuPernikahan = Carbon::parse($request->waktuPernikahan);

        $lagu = time() . '.' . $request->lagu->extension();
        $request->lagu->move(public_path('foto/'), $lagu);

        IsiUndangan::create([
            "undangan_id" => $request->undangan_id,
            "waktu_pernikahan" => $waktuPernikahan,
            "lagu" => $lagu
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
