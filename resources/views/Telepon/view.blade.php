@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <div class="card">
                <div class="card-header">{{ $datapengguna->nama }}</div>
                <div class="card-body">
                    {{ $telepon->nomor_telepon }}
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
