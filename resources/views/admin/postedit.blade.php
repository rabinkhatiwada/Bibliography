@extends('admin.adminpanel')
@section('title', 'Edit Post')

@section('content')
<div class="container">
    <h1>Edit Post</h1>
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image">{{ $post->image }}
            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" style="max-width: 200px;">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
