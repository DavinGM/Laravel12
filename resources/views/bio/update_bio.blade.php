@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Update</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('bio.update', $bio->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap"
                                value="{{ old('nama_lengkap', $bio->nama_lengkap) }}" placeholder="Your Name"
                                class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap"
                                aria-describedby="nama_lengkap_help">
                            @error('nama_lengkap')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div id="nama_lengkap_help" class="form-text">Add your full name.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-block">Jenis Kelamin</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_L" value="Laki-laki"
                                        {{ old('jenis_kelamin', $bio->jenis_kelamin) == 'Laki-laki' ? 'checked' : '' }}>
                            <label class="form-check-label" for="jenis_kelamin_L">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_P" value="Perempuan"
                                        {{ old('jenis_kelamin', $bio->jenis_kelamin) == 'Perempuan  ' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="jenis_kelamin_P">Perempuan</label>
                                </div>
                            @error('jenis_kelamin')
                                    <div class="invalid-feedback d-block">
                                <strong>{{ $message }}</strong>
                        </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir"
                            value="{{ old('tanggal_lahir', $bio->tanggal_lahir) }}"
                                class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir">
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir"
                                value="{{ old('tempat_lahir', $bio->tempat_lahir) }}"
                                class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir">
                            @error('tempat_lahir')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select name="agama" id="" class="form-control @error('agama') is-invalid @enderror">
                                <option value="Islam"></option>
                                <option value="Kristen Protestan"></option>
                                <option value="Katolik"></option>
                                <option value="Hindu"></option>
                            </select>
                            @error('agama')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="{{ old('alamat', $bio->alamat) }}"
                                class="form-control @error('alamat') is-invalid @enderror" id="alamat">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" name="telepon" value="{{ old('telepon', $bio->telepon) }}"
                                class="form-control @error('telepon') is-invalid @enderror" id="telepon">
                            @error('telepon')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email', $bio->email) }}"
                                class="form-control @error('email') is-invalid @enderror" id="email">
                            @error('email')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" name="foto" value="{{ old('foto', $bio->foto) }}"
                                class="form-control @error('foto') is-invalid @enderror" id="foto">
                            @error('foto')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
