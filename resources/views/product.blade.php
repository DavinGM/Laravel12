<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Produk FTs Project</title>

<!-- Bootstrap CSS Offline -->
<link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">

<style>
/* Custom tambahan biar tombol warna beda */
.btn-del { background-color: #dc3545; color: #fff; }
.btn-edit { background-color: #fd7e14; color: #fff; }
.error { color:red; font-size:0.9em; }
</style>
</head>
<body class="bg-light">
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="text-left mb-0">Manajemen Produk</h1>
        <h3><a href="{{ url('/product') }}"><button class="btn btn-primary">Tambah Produk +</button></a></h3>
    </div>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <!-- Table -->
    <div class="table-responsive mb-5">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($crud as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->deskpsi }}</td>
                    <td>Rp {{ number_format($c->price,0,',','.') }}</td>
                    <td>{{ $c->stock }}</td>
                    <td>
                        <a href="{{ url('/product/edit/'.$c->id) }}" class="btn btn-edit btn-sm mb-1">Update</a>
                        <form action="{{ url('/product/'.$c->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau hapus produk ini? 😅')">
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
        @if(isset($editCrud))
            <h2 class="mb-3">Update Produk</h2>
            <form action="{{ url('/product/'.$editCrud->id) }}" method="POST">
                @csrf
                @method('PUT')
        @else
            <h2 class="mb-3">Tambah Produk Baru</h2>
            <form action="{{ url('/product') }}" method="POST">
                @csrf
        @endif

            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $editCrud->name ?? '') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskpsi" class="form-control">{{ old('deskpsi', $editCrud->deskpsi ?? '') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="price" class="form-control" value="{{ old('price', $editCrud->price ?? '') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stock" class="form-control" value="{{ old('stock', $editCrud->stock ?? '') }}">
            </div>

            <button type="submit" class="btn btn-primary w-100">
                {{ isset($editCrud) ? 'Update Produk' : 'Tambah Produk' }}
            </button>
        </form>
    </div>

</div>

<!-- Bootstrap JS Offline -->
<script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
