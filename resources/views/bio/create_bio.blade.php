@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <div class="card">
                <div class="card-header">Create New data Posts</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('bio.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" placeholder="Your Name" class="form-control" id="nama_lengkap" aria-describedby="nama_lengkap">
                            <div id="nama_lengkap" class="form-text">Add your full name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" placeholder class="form-control" id="jenis_kelamin">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" placeholder class="form-control" id="tanggal_lahir">
                        </div>
                        <div class="mb-3">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" placeholder class="form-control" id="tempat_lahir">
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <input type="text" name="agama" placeholder class="form-control" id="agama">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" placeholder class="form-control" id="alamat"> 
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" name="telepon" placeholder class="form-control" id="telepon">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" placeholder class="form-control" id="email">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
