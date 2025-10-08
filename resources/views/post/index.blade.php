@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Data Posts  <a href="{{ route('post.create') }}" class="btn btn-primary">New +</a> 
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
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $no++ }} </th>
                                <td>{{ $post->title }}</td> 
                                <td>{{ $post->content }}</td>
                                <td>
                                    <a class="btn btn-outline-primary w-20" href="{{ route( 'post.show', $post->id  ) }}">show</a>
                                    <a class="btn btn-outline-warning w-20" href=" {{ route( 'post.edit', $post->id ) }}">update</a>
                                    <form method="POST" action="{{ route('post.destroy', $post->id) }} " class="d-inline">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit"  class="btn btn-outline-danger w-20 "  onclick="return confirm('so?')">delete</button>
                                    </form>
                                </td>
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
