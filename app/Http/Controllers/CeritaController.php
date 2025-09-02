<?php

namespace App\Http\Controllers;

use App\Models\Cerita;
use App\Models\IsiUndangan;
use Illuminate\Http\Request;

class CeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isiUndangan = IsiUndangan::all();
        return view('admin.cerita_create', compact('isiUndangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isiUndangan = IsiUndangan::all();
        return view('cerita.create', compact('isiUndangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $videoWedding = time() . '.' . $request->video->extension();

        $request->video->move(public_path('video/'), $videoWedding);

        Cerita::create([
            'cerita1' => $request->cerita1,
            'cerita2' => $request->cerita2,
            'cerita3' => $request->cerita3,
            'video' => $videoWedding,
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
