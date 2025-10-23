@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Data Kelas <a href="{{ route('murid.index') }}" class="btn btn-success">Murid <i class="bi bi-people"></i> </a>
                    <a href="{{ route('kelas.create') }}" class="btn btn-primary float-end">Tambah +</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kelas as $index => $k)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $k->nama_kelas }}</td>
                                    <td>
                                        <a href="{{ route('kelas.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('kelas.destroy', $k->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus kelas ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Belum ada data kelas</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
