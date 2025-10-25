<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //index
    public function index()
    {
        $barang = Barang::all();
        return view('ManyToMany.barang.index', compact('barang'));
    }

    public function create()
    {
        return view('ManyToMany.barang.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_barang' => 'required',
                'merek'       => 'required',
                'harga'       => 'required',
                'stok'        => 'required',
            ],
        );

        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    // update 

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('ManyToMany.barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_barang' => 'required',
                'merek'       => 'required',
                'harga'       => 'required',
                'stok'        => 'required',
            ],
        );

        $barang = Barang::findOrFail($id);
        $barang->update($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diupdate!');
    }

    // delete
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus!');
    }
}
