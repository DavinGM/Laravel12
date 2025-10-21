@extends('layouts.app')

@section('content')

<div class="">
    <div class="card">
        @if (session('success'))
            <div class="alert alert-success mt-2" aria-label="close">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-header d-flex justify-content-between">
            <h5>CRUD GAME</h5>
            <a href="{{ route('games.create') }}" class="btn btn-success">+ GAME</a>
        </div>
        <div class="card-body">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <td>JUDUL</td>
                        <td>DESKRIPSI</td>
                        <td>HARGA</td>
                        <td>STOK</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($game as $g)
                    <tr>
                        <td>{{ $g->judul }}</td>
                        <td>{{ $g->deskripsi }}</td>
                        <td>{{ $g->harga }}</td>
                        <td>{{ $g->stok }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection