@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">CREATE GAME</div>
        <div class="card-body">
            <form action="{{ route('games.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">JUDUL</label>
                    <input type="text" name="judul" id="judul" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">DESKRIPSI</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">HARGA</label>
                    <input type="number" name="harga" id="harga" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">STOK</label>
                    <input type="number" name="stok" id="stok" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>
</div>

@endsection