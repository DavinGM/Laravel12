@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Data Telepon 
                <a href=" {{ route('telepon.create') }}  " class="btn btn-primary">New <i class="bi bi-folder-plus"></i></a> 
                <a href="{{ route('pengguna.index') }}" class="btn btn-success">Pengguna <i class="bi bi-people"></i></a>
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
                                <th scope="col">nomor</th>
                                <th scope="col">nama pengguna</th>
                                <th scope="col">created_at</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datatelepon as $png)
                            <tr>
                                <th scope="row">{{ $png->id ?? "-" }} </th>
                                <td>{{ $png->nomor_telepon ?? "-" }}</td> 
                                <td>{{ $png->pengguna->nama }}</td>
                                <td>{{ $png->created_at ?? "-" }}</td>
                                <td>
                                    <a href="{{ route('telepon.edit', $png->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('telepon.show', $png->id) }}" class="btn btn-primary">View</a>
                                    <form action="{{ route('telepon.destroy', $png->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                    </form>
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
