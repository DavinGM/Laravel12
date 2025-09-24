<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan tabel + form tambah
    public function index(){
        $crud = product::all();
        return view('product', compact('crud'));
    }

    // Menampilkan form update
    public function edit($id){
        $crud = product::all(); // tetap tampil semua data di tabel
        $editCrud = product::findOrFail($id);
        return view('product', compact('crud','editCrud'));
    }

    // Tambah data baru
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'deskpsi' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        product::create($request->all());
        return redirect('/product')->with('success','Produk berhasil ditambahkan');
    }

    // Update data lama
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'deskpsi' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $crud = product::findOrFail($id);
        $crud->update($request->all());
        return redirect('/product')->with('success','Produk berhasil diupdate');
    }

    // Hapus data
    public function destroy($id){
        $crud = product::findOrFail($id);
        $crud->delete();
        return redirect('/product')->with('success','Produk berhasil dihapus');
    }
}
