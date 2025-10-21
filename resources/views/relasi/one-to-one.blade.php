@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Relasi One to One</div>

                    <div class="card-body">
                        @foreach ($mahasiswa as $mhs)
                            <ul>
                                <li>Nama : {{ $mhs->nama }}</li>
                                <li>NIM : {{ $mhs->nim }}</li>
                                <li>Wali : {{ $mhs->wali->nama }}</li>
                            </ul>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

