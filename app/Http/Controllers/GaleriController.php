<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\IsiUndangan;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $foto1 = time() . '.' . $request->foto1->extension();
        $request->foto1->move(public_path('foto/'), $foto1);

        $foto2 = time() . '.' . $request->foto2->extension();
        $request->foto2->move(public_path('foto/'), $foto2);

        $foto3 = time() . '.' . $request->foto3->extension();
        $request->foto3->move(public_path('foto/'), $foto3);

        $foto4 = time() . '.' . $request->foto4->extension();
        $request->foto4->move(public_path('foto/'), $foto4);

        $foto5 = time() . '.' . $request->foto5->extension();
        $request->foto5->move(public_path('foto/'), $foto5);

        $foto6 = time() . '.' . $request->foto6->extension();
        $request->foto6->move(public_path('foto/'), $foto6);

        Galeri::create([
            'foto1' => $foto1,
            'foto2' => $foto2,
            'foto3' => $foto3,
            'foto4' => $foto4,
            'foto5' => $foto5,
            'foto6' => $foto6,
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
