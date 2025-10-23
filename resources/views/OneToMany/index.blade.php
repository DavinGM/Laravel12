@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    Data Murid  <a href="{{ route('kelas.index') }}" class="btn btn-success">Kelas <i class="bi bi-mortarboard-fill"></i></a>
                    <a href="{{ route('murid.create') }}" class="btn btn-primary float-end">New +</a>
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
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($murid as $m)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $m->nama_lengkap }}</td>
                                <td>{{ $m->jenis_kelamin }}</td>
                                <td>{{ $m->tanggal_lahir }}</td>
                                <td>{{ $m->kelas->nama_kelas ?? '-' }}</td>
                                <td>
                                    <a class="btn btn-outline-warning" href="{{ route('murid.edit', $m->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('murid.destroy', $m->id) }}" class="d-inline">
                                        @csrf 
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Yakin hapus data ini?')">Delete</button>
                                    </form>
                                    <a class="btn btn-outline-info" href="{{ route('murid.show', $m->id) }}">Detail</a>
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
