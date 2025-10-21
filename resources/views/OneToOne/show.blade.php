@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <div class="card">
                <div class="card-header">{{ $pengguna->nama }}</div>
                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="mb-3">
                            di Buat :<p>{{ $pengguna->created_at }}</p>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
