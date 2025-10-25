<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{

    public function index()
    {
        $transaksis = Transaksi::with(['barang', 'pembeli'])->latest()->paginate(10);

        return view('ManyToMany.transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        $barangs = Barang::all();
        $pembelis = Pembeli::all();

        return view('ManyToMany.transaksi.create', compact('barangs', 'pembelis'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'tanggal_transaksi' => 'required|date',
            'barang_id'         => 'required|exists:barangs,id',
            'pembeli_id'        => 'required|exists:pembelis,id',
            'jumlah_barang'     => 'required|integer|min:1',
        ]);

        $barang = Barang::findOrFail($validated['barang_id']);

        $validated['total_harga'] = $barang->harga * $validated['jumlah_barang'];

        Transaksi::create($validated);

        return redirect()
            ->route('transaksi.index')
            ->with('success', 'Transaksi berhasil ditambahkan.');
    }

    /**
     */
    public function show($id)
    {
        $transaksi = Transaksi::with(['barang', 'pembeli'])->findOrFail($id);

        return view('ManyToMany.transaksi.show', compact('transaksi'));
    }

    /**
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $barangs = Barang::all();
        $pembelis = Pembeli::all();

        return view('ManyToMany.transaksi.edit', compact('transaksi', 'barangs', 'pembelis'));
    }

    /**
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tanggal_transaksi' => 'required|date',
            'barang_id'         => 'required|exists:barangs,id',
            'pembeli_id'        => 'required|exists:pembelis,id',
            'jumlah_barang'     => 'required|integer|min:1',
        ]);

        $barang = Barang::findOrFail($validated['barang_id']);
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($validated);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    /**
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
