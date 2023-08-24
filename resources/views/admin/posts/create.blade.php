@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

           <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Insert post title" name="title">
                </div>

                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" placeholder="https://example.jpg" name="image">
                </div>

                @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormConcontenttrolTextarea1" class="form-label">Content</label>
                    <textarea class="form-control" id="content" rows="8"  name="content"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit">Create Post</button>
                    <button type="reset">Reset</button>
                </div>

           </form>
                        
        </div>
    </div>
</div>
@endsection