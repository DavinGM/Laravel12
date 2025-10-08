@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <div class="card">
                <div class="card-header">Update data Pengguna</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('post.update', $posts->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">title</label>
                            <input type="text" value="{{ $posts->title }}" name="title" placeholder="Your Titel" class="form-control" id="title" aria-describedby="title">
                            <div id="title" class="form-text">Add title ask you anyting.</div>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">content</label>
                            <input type="text" value="{{ $posts->content }}" name="content" placeholder="Your Content" class="form-control" id="content">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
