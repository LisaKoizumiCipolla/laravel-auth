@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">ID: {{ $post->id }} SLUG: {{ $post->slug }}</h5>
                <img src="{{ $post->image }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>

                    <a href="{{ route('admin.posts.index')}}" class="btn btn-sm btn-primary">Go back</a>
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-success">Edit</a>
                    <form class="d-inline-block" action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-warning">Delete</button>
                    </form>

                </div>
            </div>
            
                        
        </div>
    </div>
</div>
@endsection
