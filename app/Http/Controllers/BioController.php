<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use Illuminate\Http\Request;

class BioController extends Controller
{
    // Menampilkan tabel + form tambah
    public function index(){
        $bio = biodata::all();
        return view('biodata', compact('bio'));
    }

    // Menampilkan form update
    public function edit($id){
        $bio = biodata::all(); // tetap tampil semua data di tabel
        $editBio = biodata::findOrFail($id);
        return view('biodata', compact('bio','editBio'));
    }

    // Tambah data baru
    public function store(Request $request){
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
        ]);

        biodata::create($request->all());
        return redirect('/bio')->with('success','Data berhasil ditambahkan');
    }

    // Update data lama
    public function update(Request $request, $id){
        $request->validate([
        'nama_lengkap' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required',
        'tempat_lahir' => 'required',
        'agama' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'email' => 'required',
    ]);


    $bio = biodata::findOrFail($id);
        $bio->update($request->all());
        return redirect('/bio')->with('success','Data berhasil diupdate');
    }

    // Hapus data
    public function des($id){
        $bio = biodata::findOrFail($id);
        $bio->delete();
        return redirect('/bio')->with('success','Data berhasil dihapus');
    }
}
