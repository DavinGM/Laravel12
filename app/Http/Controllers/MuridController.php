<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    // Index
    public function index()
    {
        $murid = Murid::with('kelas')->get();
        return view('OneToMany.index', compact('murid'));
    }




    // Create Views
    public function create()
    {
        $kelas = Kelas::all();
        return view('OneToMany.create', compact('kelas'));
    }

    // Create Logik
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:murids,email',
            'id_kelas' => 'required|exists:kelas,id',
        ]);

        Murid::create($request->all());
        return redirect()->route('murid.index')->with('success', 'Data murid berhasil ditambahkan!');
    }






    // edit View
    public function edit($id)
    {
        $murid = Murid::findOrFail($id);
        $kelas = Kelas::all();
        return view('OneToMany.edit', compact('murid', 'kelas'));
    }

    // Edit Logik
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'id_kelas' => 'required|exists:kelas,id',
        ]);

        $murid = Murid::findOrFail($id);
        $murid->update($request->all());

        return redirect()->route('murid.index')->with('success', 'Data murid berhasil diperbarui!');
    }




    // Hapus data 
    public function destroy($id)
    {
        $murid = Murid::findOrFail($id);
        $murid->delete();
        return redirect()->route('murid.index')->with('success', 'Data murid berhasil dihapus!');
    }


    // Detail View
    public function show($id)
    {
        $murid = Murid::with('kelas')->findOrFail($id);
        return view('OneToMany.show', compact('murid'));
    }
}
