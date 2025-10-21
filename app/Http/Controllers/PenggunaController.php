<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $penggunas = Pengguna::all();
        return view('OneToOne.index', compact('penggunas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $penggunas = Pengguna::all();
        return view('OneToOne.create', compact('penggunas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $pengguna = new Pengguna();
        $pengguna->nama = $request->nama;
        $pengguna->save();

        return redirect()->route('pengguna.index')->with('success', 'Pengguna created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengguna $pengguna)
    {
        //p
        return view('OneToOne.show', compact('pengguna'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('OneToOne.update', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $pengguna = Pengguna::findOrFail($id);
        $pengguna->nama = $request->nama;
        $pengguna->save();
        return redirect()->route('pengguna.index')->with('success', 'Pengguna updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengguna $pengguna)
    {
        //
        $pengguna->delete();
        return redirect()->route('pengguna.index')->with('success', 'Pengguna deleted successfully.');
    }
}
