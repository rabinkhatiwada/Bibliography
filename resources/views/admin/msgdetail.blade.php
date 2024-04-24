@extends('admin.adminpanel')
@section('title', 'Messages')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
            <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
            <li class="breadcrumb-item"><a href="/admin/msg">Messages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Message Detail</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-light">
            <h3 class="card-title">Message Detail</h3>
        </div>
        <div class="card-body">
            @if($message)
                <p><strong>Name:</strong> {{ $message->name }}</p>
                <p><strong>Email:</strong> {{ $message->email }}</p>
                <p><strong>Message:</strong> {{ $message->msg }}</p>
            @else
                <p>Message not found.</p>
            @endif
        </div>
    </div>
</div>
@endsection
