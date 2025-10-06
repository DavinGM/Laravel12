<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biodata FTs Project</title>

<!-- Bootstrap CSS Offline -->
<link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">

<style>
    @import "tailwindcss";
/* Custom tambahan biar tombol warna beda */
.btn-del { background-color: #dc3545; color: #fff; }
.btn-edit { background-color: #fd7e14; color: #fff; }
.error { color:red; font-size:0.9em; }
</style>
</head>
<body class="bg-light">
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="text-left mb-0">Biodata FTs Project</h1>
            <h3 class=""><a href="http://project_davin.test/bio"><button class="btn btn-primary">Tambah Data +</button></a> </h3>
    </div>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <!-- Table -->
    <div class="table-responsive mb-5">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>id</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($bio as $b)
                <tr>
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->nama_lengkap }}</td>
                    <td>{{ $b->jenis_kelamin }}</td>
                    <td>{{ $b->tanggal_lahir }}</td>
                    <td>{{ $b->tempat_lahir }}</td>
                    <td>{{ $b->agama }}</td>
                    <td>{{ $b->alamat }}</td>
                    <td>{{ $b->telepon }}</td>
                    <td>{{ $b->email }}</td>
                    <td>
                        <a href="{{ url('/bio/edit/'.$b->id) }}" class="btn btn-edit btn-sm mb-1">Update</a>
                        <form action="{{ url('/bio/'.$b->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau hapus 😅')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-del btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Form Tambah / Update -->
    <div class="card p-4 shadow-sm bg-white mb-5">
        @if(isset($editBio))
            <h2 class="mb-3">Update Data</h2>
            <form action="{{ url('/bio/'.$editBio->id) }}" method="POST">
                @csrf
                @method('PUT')
        @else
            <h2 class="mb-3">Tambah Data Baru</h2>
            <form action="{{ url('/bio') }}" method="POST">
                @csrf
        @endif

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', $editBio->nama_lengkap ?? '') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select">
                    <option value="Laki-laki" {{ (old('jenis_kelamin', $editBio->jenis_kelamin ?? '')=='Laki-laki')?'selected':'' }}>Laki-laki</option>
                    <option value="Perempuan" {{ (old('jenis_kelamin', $editBio->jenis_kelamin ?? '')=='Perempuan')?'selected':'' }}>Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $editBio->tanggal_lahir ?? '') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', $editBio->tempat_lahir ?? '') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Agama</label>
                <input type="text" name="agama" class="form-control" value="{{ old('agama', $editBio->agama ?? '') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $editBio->alamat ?? '') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $editBio->telepon ?? '') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $editBio->email ?? '') }}">
            </div>

            <button type="submit" class="btn btn-primary w-100">
                {{ isset($editBio) ? 'Update Data' : 'Tambah Data' }}
            </button>
        </form>
    </div>

</div>

<!-- Bootstrap JS Offline -->
<script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
