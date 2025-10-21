@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Data penggunas  <a href="{{ route('pengguna.create') }}" class="btn btn-primary">New +</a> 
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
                                <th scope="col">name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($penggunas as $png)
                            <tr>
                                <th scope="row">{{ $png->id }} </th>
                                <td>{{ $png->nama }}</td> 
                                <td>{{ $png->created_at }}</td>
                                <td>
                                    <a href="{{ route( 'pengguna.edit', $png->id  ) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route( 'pengguna.show', $png->id  ) }}" class="btn btn-primary">View</a>
                                    <form action="{{ route('pengguna.destroy', $png->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
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
