@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header bg-info">Data Pembeli
                <a href=" {{ route('pembeli.create') }}  " class="btn btn-primary">New <i class="bi bi-folder-plus"></i></a> 
                <a href=" {{ route('barang.index') }}" class="btn btn-success">Barang <i class="bi bi-bag-fill"></i></a>
                <a href=" {{ route('pembeli.index') }}" class="btn btn-success">pembeli <i class="bi bi-people-fill"></i></a>
                <a href=" {{ route('transaksi.index') }}" class="btn btn-success">Barang <i class="bi bi-wallet2"></i></a>
            @if (session('success'))
                <div class="alert alert-success mt-2" aria-label="close">
                    {{ session('success') }}
                </div>
            @endif
            </div>
                <div class="card-body">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">nama pembeli</th>
                                <th scope="col">jenis kelamin</th>
                                <th scope="col">telepon</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembeli as $png)
                            <tr>
                                <th scope="row">{{ $png->id }}</th>
                                <td>{{ $png->nama_pembeli }}</td>
                                <td>{{ $png->jenis_kelamin }}</td>
                                <td>{{ $png->telepon }}</td>
                                <td>
                                    <a href="{{ route('pembeli.edit', $png->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('pembeli.destroy', $png->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this item?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
