<?php

namespace App\Http\Controllers;

use App\Models\Telepon;
use Illuminate\Http\Request;
use App\Models\Pengguna;
use PhpParser\Node\Expr\FuncCall;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datatelepon = Telepon::all();
        return view('Telepon.index', compact('datatelepon'));
    }

    public function create()
    {
        $datapengguna = Pengguna::all();
        return view('Telepon.create', compact('datapengguna'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nomor_telepon' => 'required|string|max:15',
            'pengguna_id' => 'required|exists:penggunas,id',
        ]);

        $telepon = new Telepon();
        $telepon->nomor_telepon = $request->input('nomor_telepon');
        $telepon->pengguna_id = $request->input('pengguna_id');
        $telepon->save();

        return redirect()->route('telepon.index')->with('success', 'Telepon created successfully.');
    }






    public function edit(string $id)
    {
        $telepon = Telepon::findOrFail($id);
        $datapengguna = Pengguna::findOrFail($id);
        return view('Telepon.edit', compact('telepon', 'datapengguna'));
    }



    public function update(Request $request, string $id){
    $request->validate(
        [
            'nomor_telepon' => 'required|string|max:15',
            'pengguna_id' => 'required|exists:penggunas,id',
        ]
    );

    $telepon = Telepon::findOrFail($id);
    $telepon->nomor_telepon = $request->input('nomor_telepon'); 
    $telepon->pengguna_id = $request->input('pengguna_id'); 
    
    $telepon->save();

    session()->flash('success', "Nomor Berhasil di rubah dengan baik mwheheh. ");
    return redirect()->route('telepon.index');
}


    public function destroy(Telepon $telepon){
        $telepon->delete();
        return redirect()->route('telepon.index')->with('success', 'Data berhasil di hapus');

    }

    public function show(Request $request, string $id){
        $datapengguna = Pengguna::findOrFail($id);
        $telepon = Telepon::findOrFail($id);
        return view('telepon.view', compact('telepon','datapengguna'));
    }
}
