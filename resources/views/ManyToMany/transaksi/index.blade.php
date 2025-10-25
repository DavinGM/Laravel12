@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" justify-content-center">
        <div class="    -md-11">
            <div class="card">
                <div class="card-header bg-secondary">Data transaksi
                <a href=" {{ route('transaksi.create') }}  " class="btn btn-primary">New <i class="bi bi-folder-plus"></i></a> 
                <a href=" {{ route('barang.index') }}" class="btn btn-success">Barang <i class="bi bi-bag-fill"></i></a>
                <a href=" {{ route('pembeli.index') }}" class="btn btn-success">pembeli <i class="bi bi-people-fill"></i></a>
                <a href=" {{ route('transaksi.index') }}" class="btn btn-success">transaksi <i class="bi bi-wallet2"></i></a>

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
                                <th class=" ">id</th>
                                <th class=" ">tanggal transaksi</th>
                                <th class=" ">total harga</th>
                                <th class=" ">nama Barang </th>
                                <th class=" ">nama pembeli</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksis as $png)
                            <tr>
                                <td class="">{{ $png->id }}</td>
                                <td class="">{{ $png->tanggal_transaksi }}</td>
                                <td class="">{{ $png->total_harga }}</td>
                                <td class="">{{ $png->barang->nama_barang }}</td>
                                <td class="">{{ $png->pembeli->nama_pembeli }}</td>
                                <td>
                                    <a href="{{  route('transaksi.edit', $png->id) }}" class="btn btn-warning">edit</a>
                                    <form action="{{ route('transaksi.destroy', $png->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
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
