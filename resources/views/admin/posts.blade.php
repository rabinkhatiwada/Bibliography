@extends('admin.adminpanel')
@section('title', 'Manage Posts')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
            <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Posts</li>
        </ol>
    </nav>

    <!-- Create New Post Form -->
    <div class="card mb-3">
        <div class="card-body">
            <h3>Create New Post</h3>
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter content"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>


    <!-- List of Posts -->
    <div class="card">
        <div class="card-body">
            <h3>List of Posts</h3>
            <ul class="list-group">
                @foreach ($posts as $post)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-8">
                            <strong>{{ $post->title }}</strong> <br>
                            @if ($post->image)
                            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" style="max-width: 200px;">
                            @else
                            No Image
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div class="float-right">
                                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-primary">View & Edit</a>
                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>



</div>
@endsection
