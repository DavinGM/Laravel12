@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <div class="card">
                <div class="card-header">Create New data Posts</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">title</label>
                            <input type="text" name="title" placeholder="Your Titel" class="form-control" id="title" aria-describedby="title">
                            <div id="title" class="form-text">Add title ask you anyting.</div>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">content</label>
                            <input type="text" name="content" placeholder="Your Content" class="form-control" id="content">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
