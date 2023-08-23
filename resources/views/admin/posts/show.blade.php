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

                    <a href="" class="btn btn-sm btn-primary">View</a>
                    <a href="" class="btn btn-sm btn-success">Edit</a>
                    <a href="" class="btn btn-sm btn-warning">Delete</a>
                </div>
            </div>
            
                        
        </div>
    </div>
</div>
@endsection