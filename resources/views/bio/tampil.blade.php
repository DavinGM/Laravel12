@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white fw-bold fs-5">
                    <i class="bi bi-person-circle me-2"></i> Biodata
                </div>
                <div class="card-body bg-light">
                    <dl class="row mb-0">
                        <dt class="col-sm-4">Nama Lengkap</dt>
                        <dd class="col-sm-8">{{ $bio->nama_lengkap }}</dd>

                        <dt class="col-sm-4">Jenis Kelamin</dt>
                        <dd class="col-sm-8">{{ $bio->jenis_kelamin }}</dd>

                        <dt class="col-sm-4">Tanggal Lahir</dt>
                        <dd class="col-sm-8">{{ $bio->tanggal_lahir }}</dd>

                        <dt class="col-sm-4">Tempat Lahir</dt>
                        <dd class="col-sm-8">{{ $bio->tempat_lahir }}</dd>

                        <dt class="col-sm-4">Agama</dt>
                        <dd class="col-sm-8">{{ $bio->agama }}</dd>

                        <dt class="col-sm-4">Alamat</dt>
                        <dd class="col-sm-8">{{ $bio->alamat }}</dd>

                        <dt class="col-sm-4">Telepon</dt>
                        <dd class="col-sm-8">{{ $bio->telepon }}</dd>

                        <dt class="col-sm-4">Email</dt>
                        <dd class="col-sm-8">{{ $bio->email }}</dd>

                        <a class="btn btn-success" href="{{ route('bio.index') }}">Kembali</a>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
