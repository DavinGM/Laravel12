@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <div class="card">
                <div class="card-header">Create New data Posts</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('telepon.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="pengguna_id" class="form-label">Pengguna</label>
                            <select class="form-select" aria-label="Default select example" id="pengguna_id" name="pengguna_id" required>
                                <option selected>-- Pilih Pengguna --</option>
                                @foreach ($datapengguna as $png)
                                    <option value="{{ $png->id }}" {{ old('pengguna_id') == $png->id ? 'selected' : '' }}>{{ $png->nama }}</option>
                                @endforeach
                            </select>
                            @error('pengguna_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required>
                            @error('nomor_telepon')
                                <div class="text-danger">{{ $message }}</div>   
                            @enderror
                        </div>
                        
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
