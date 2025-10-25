<?php

namespace App\Http\Controllers;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class pembeliController extends Controller
{
    //index
    public function index()
    {
        $pembeli = Pembeli::all();
        return view('ManyToMany.pembeli.index', compact('pembeli'));
    }

    public function create()
    {
        return view('ManyToMany.pembeli.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_pembeli' => 'required',
                'jenis_kelamin'       => 'required',
                'telepon'       => 'required',
            ],
        );

        Pembeli::create($request->all());
        return redirect()->route('pembeli.index')->with('success', 'Pembeli berhasil ditambahkan!');
    }






    // update 

    public function edit($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('ManyToMany.pembeli.edit', compact('pembeli'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_pembeli' => 'required',
                'jenis_kelamin'       => 'required',
                'telepon'       => 'required',
            ],
        );

        $pembeli = Pembeli::findOrFail($id);
        $pembeli->update($request->all());
        return redirect()->route('pembeli.index')->with('success', 'Pembeli berhasil diupdate!');
    }




    public function destroy($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index')->with('success', 'Pembeli berhasil dihapus!');
    }
    
}
