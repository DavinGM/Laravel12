<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use Illuminate\Http\Request;

class BioController extends Controller
{
    
// ╔══════════════════════════════════╗
// ║ Index (tampilkan semua data   )  ║
// ╚══════════════════════════════════╝
    public function index()
    {
        $bio = biodata::all();
        return view('Bio.index', compact('bio'));
        // $bio;     
        

        // bio.index di ambil dari folder 📁"bio" yang ada di file "index.blade.php"
    }


// ╔══════════════════════════════════╗
// ║ Create (form tambah data       ) ║
// ╚══════════════════════════════════╝
public function create()
{
    return view('Bio.create_bio');
}

public function store(Request $request)
{
    $request->validate([
        'nama_lengkap' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required|date',
        'tempat_lahir' => 'required',
        'agama' => 'required',
        'alamat' => 'required',
        'telepon' => 'required|numeric',
        'email' => 'required|email',
        'foto' => 'required|image|max:2048', // Maksimal ukuran 2MB
        
    ]);

    $bio = new biodata();
    $bio->nama_lengkap = $request->input('nama_lengkap');
    $bio->jenis_kelamin = $request->input('jenis_kelamin');
    $bio->tanggal_lahir = $request->input('tanggal_lahir');
    $bio->tempat_lahir = $request->input('tempat_lahir');
    $bio->agama = $request->input('agama');
    $bio->alamat = $request->input('alamat');
    $bio->telepon = $request->input('telepon');
    $bio->email = $request->input('email');
    $bio->foto = $request->input('foto');
    if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = $img->getClientOriginalName(); 
            $img->move('storage', $name);
            $bio->foto = $name; }
    $bio->save();
    session()->flash('success', 'Data Berhasil di Tambah mwhehe.');
    return redirect()->route('bio.index');
}

// ╔══════════════════════════════════╗
// ║ Edit (form update data        )  ║
// ╚══════════════════════════════════╝

public function edit(string $id)
{
    $bio = biodata::findOrFail($id);
    return view('Bio.update_bio', compact('bio'));
}
public function update(Request $request, string $id)
{
    $request->validate([
        'nama_lengkap' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required|date',
        'tempat_lahir' => 'required',
        'agama' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'email' => 'required|email',
    ]);

    $bio = biodata::findOrFail($id);
    $bio->nama_lengkap = $request->input('nama_lengkap');
    $bio->jenis_kelamin = $request->input('jenis_kelamin');
    $bio->tanggal_lahir = $request->input('tanggal_lahir');
    $bio->tempat_lahir = $request->input('tempat_lahir');
    $bio->agama = $request->input('agama');
    $bio->alamat = $request->input('alamat');
    $bio->telepon = $request->input('telepon');
    $bio->email = $request->input('email');
    $bio->foto = $request->input('foto');
    if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = $img->getClientOriginalName();
            $img->move('storage', $name);
            $bio->foto = $name; }
    $bio->save();

    session()->flash('success', 'Data Berhasil di Update mwhehe.');
    return redirect()->route('bio.index');
}

// ╔══════════════════════════════════╗
// ║  (TAMPILKAN             )        ║
// ╚══════════════════════════════════╝

public function show(string $id)
{
    $bio = biodata::findOrFail($id);
    return view('Bio.tampil', compact('bio'));
}


// ╔══════════════════════════════════╗
// ║ Delete (hapus data           )   ║
// ╚══════════════════════════════════╝
public function destroy(string $id)
{
    $bio = biodata::findOrFail($id);
    $bio->delete();
    session()->flash('success', 'Data Berhasil di Hapus mwhehe.');
    return redirect()->route('bio.index');
}


}
