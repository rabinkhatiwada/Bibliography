@extends('app')
@section('title','Blogs')
@section('content')

<div class="container mt-4 posts">
    <h1>My Latest Posts</h1>

    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4">
            <div class="post mb-4 shadow p-2"> <!-- Added shadow class for shadow effect -->
                <div class="img" style="width: 100%; height:300px; overflow: hidden;">
                    <img src="{{ asset('images/' . $post->image) }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Blog Post Image" class="img-fluid mb-3">
                </div>

                <h2 class="post-title">{{ $post->title }}</h2>
                <p class="post-meta">Posted on {{ $post->created_at->format('F d, Y') }}</p>
                <p class="post-content">{{ substr($post->content, 0, 100) }}{{ strlen($post->content) > 100 ? '...' : '' }}</p>
                <a href="{{ route('post.show', ['id' => $post->id]) }}" class="btn btn-primary">Read More</a>
                <p class="full-content" style="display: none;">{{ $post->content }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.read-more').click(function(e) {
            e.preventDefault();
            $(this).prev('.post-content').text($(this).next('.full-content').text());
            $(this).hide();
        });
    });
</script>

@endsection
