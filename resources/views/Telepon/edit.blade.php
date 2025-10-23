@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <div class="card">
                <div class="card-header">Update data Pengguna</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('telepon.update', $telepon->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        {{-- TAMBAHKAN INPUT HIDDEN INI --}}
                        <input type="hidden" name="pengguna_id" value="{{ $datapengguna->id }}">
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Nomor</label>
                            <input type="text" value="{{ $telepon->nomor_telepon }}" name="nomor_telepon" placeholder="Nomor Telepon" class="form-control" id="title" aria-describedby="title" required>
                            <div id="title" class="form-text"> Ganti nomor kamu di sini </div>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Nama</label>
                            <input type="text" value="{{ $datapengguna->nama }}" name="nama" placeholder="Your Content" class="form-control" id="content" disabled>
                        </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection