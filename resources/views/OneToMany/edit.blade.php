@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <div class="card">
                <div class="card-header">Edit Data Murid</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('murid.update', $murid->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" value="{{ $murid->nama_lengkap }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="Laki-laki" {{ $murid->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $murid->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{ $murid->tanggal_lahir }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{ $murid->tempat_lahir }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <input type="text" name="agama" value="{{ $murid->agama }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" required>{{ $murid->alamat }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $murid->email }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <select name="id_kelas" class="form-control" required>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}" {{ $murid->id_kelas == $k->id ? 'selected' : '' }}>
                                        {{ $k->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
