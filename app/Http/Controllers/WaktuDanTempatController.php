<?php

namespace App\Http\Controllers;

use App\Models\IsiUndangan;
use App\Models\WaktuDanTempat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WaktuDanTempatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isiUndangan = IsiUndangan::all();
        return view('admin.waktu_dan_tempat_create', compact('isiUndangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isiUndangan = IsiUndangan::all();
        return view('waktuDanTempat.create', compact('isiUndangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tanggalAkad = Carbon::parse($request->tanggalAkad);
        $tanggalResepsi = Carbon::parse($request->tanggalResepsi);

        WaktuDanTempat::create([
            "tanggal_akad" => $tanggalAkad,
            "tanggal_resepsi" => $tanggalResepsi,
            "alamat_akad" => $request->alamat_akad,
            "alamat_resepsi" => $request->alamat_resepsi,
            "map_alamat_akad" => $request->map_alamat_akad,
            "map_alamat_resepsi" => $request->map_alamat_resepsi,
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
