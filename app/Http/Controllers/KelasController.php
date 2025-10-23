<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    //index
    public function index()
    {
        $kelas = Kelas::all();
        return view('OneToMany.kelas.index', compact('kelas'));
    }




    // View Create
    public function create()
    {
        return view('OneToMany.kelas.create');
    }
    //create Logik
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
        ]);

        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil ditambahkan!');
    }





    // edit View
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('OneToMany.kelas.edit', compact('kelas'));
    }
    // Edit Logik
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->update([
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil diperbarui!');
    }




    // Hapus data 
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil dihapus!');
    }
}
