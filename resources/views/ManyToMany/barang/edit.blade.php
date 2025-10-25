@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <div class="card">
                <div class="card-header">Update data Barang</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('barang.update', $barang->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}">
                        </div>
                        <div class="mb-3">
                            <label for="merek" class="form-label">Merek</label>
                            <input type="text" class="form-control" id="merek" name="merek" value="{{ $barang->merek }}">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}">
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="stok" name="stok" value="{{ $barang->stok }}">
                        </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection