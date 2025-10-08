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
            <h3 class=""><a href="{{ route('bio.create') }}"><button class="btn btn-primary">Tambah Data +</button></a> </h3>
    </div>
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
                        <a href="{{ route('bio.edit', $b->id) }}" class="btn btn-edit btn-sm mb-1">Edit</a>
                        <a href="{{ route('bio.show', $b->id) }}" class="btn btn-primary btn-sm mb-1">Lihat</a>
                        <form action="{{ route('bio.destroy', $b->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-del btn-sm" onclick="return confirm('Seirus bang mau di hapus?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

<!-- Bootstrap JS Offline -->
<script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
