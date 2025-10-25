@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="col-md-8 mx-auto">
    <div class="card">
      <div class="card-header">Edit Transaksi</div>
      <div class="card-body">
        <form method="POST" action="{{ route('transaksi.update', $transaksi->id) }}">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label class="form-label">Tanggal Transaksi</label>
            <input type="date" class="form-control" name="tanggal_transaksi" value="{{ old('tanggal_transaksi', $transaksi->tanggal_transaksi) }}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Barang</label>
            <select class="form-select" name="barang_id" required>
              <option value="">Pilih Barang</option>
              @foreach ($barangs as $barang)
                <option value="{{ $barang->id }}" {{ $barang->id == $transaksi->barang_id ? 'selected' : '' }}>
                  {{ $barang->nama_barang }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Pembeli</label>
            <select class="form-select" name="pembeli_id" required>
              <option value="">Pilih Pembeli</option>
              @foreach ($pembelis as $pembeli)
                <option value="{{ $pembeli->id }}" {{ $pembeli->id == $transaksi->pembeli_id ? 'selected' : '' }}>
                  {{ $pembeli->nama_pembeli }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" name="jumlah_barang" value="{{ old('jumlah_barang', $transaksi->jumlah_barang) }}" min="1" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Total Harga</label>
            <input type="text" class="form-control" name="total_harga" value="{{ old('total_harga', $transaksi->total_harga) }}" required>
          </div>
          <button type="submit" class="btn btn-primary text-white">Perbarui</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
