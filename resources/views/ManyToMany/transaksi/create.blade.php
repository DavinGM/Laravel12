@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="col-md-8 mx-auto">
    <div class="card">
      <div class="card-header bg-primary text-white">Tambah Transaksi</div>
      <div class="card-body">
        <form method="POST" action="{{ route('transaksi.store') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label">Tanggal Transaksi</label>
            <input type="date" class="form-control" name="tanggal_transaksi" value="{{ old('tanggal_transaksi') }}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Barang</label>
            <select class="form-select" name="barang_id" required>
              <option value="">Pilih Barang</option>
              @foreach ($barangs as $barang)
                <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Pembeli</label>
            <select class="form-select" name="pembeli_id" required>
              <option value="">Pilih Pembeli</option>
              @foreach ($pembelis as $pembeli)
                <option value="{{ $pembeli->id }}">{{ $pembeli->nama_pembeli }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" name="jumlah_barang" min="1" value="{{ old('jumlah_barang') }}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Total Harga</label>
            <input type="text" class="form-control" name="total_harga" value="{{ old('total_harga') }}" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
