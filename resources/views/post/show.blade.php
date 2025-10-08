@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <div class="card">
                <div class="card-header">{{ $posts->title }}</div>
                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="mb-3">
                        </div>
                        <div class="mb-3">
                            <p>{{    $posts->content }}</p>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
