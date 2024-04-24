@extends('app')
@section('title', $post->title)
@section('content')

<div class="container mt-4">
    <h1>{{ $post->title }}</h1>
    @if($post->image)
    <div class="text-center">
        <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid mt-3 mb-3" style="width: 500px; height: 300px; object-fit: cover;">
    </div>
    @endif
    <p class="post-meta">Posted on {{ $post->created_at->format('F d, Y') }}</p>
    <div class="post-content">
        {!! $post->content !!}
    </div>
</div>

@endsection


