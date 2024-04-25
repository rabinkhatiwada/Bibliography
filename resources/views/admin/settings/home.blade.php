@extends('admin.adminpanel')
@section('title', 'Home Page Settings')
@section('jumbo')
<li class="breadcrumb-item"><a href="/admin/settings">Settings</a></li>
<li class="breadcrumb-item active" aria-current="page">Home Page Settings</li>
@section('content')

<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$data->title}}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label for="paragraph1">Paragraph 1:</label>
            <textarea class="form-control" name="paragraph1" id="paragraph1" rows="3">{{$data->paragraph1}}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label for="paragraph2">Paragraph 2:</label>
            <textarea class="form-control" name="paragraph2" id="paragraph2" rows="3">{{$data->paragraph2}}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="button_text">Button Text:</label>
            <input class="form-control" type="text" name="button_text" id="button_text" value="{{$data->button_text}}">
        </div>
        <div class="col-md-6">
            <label for="image">Upload Image:</label>
            <input class="form-control" type="file" name="image" id="image">
            {!!$data->image!!}
        </div>
    </div>
    <button class="btn btn-primary mt-3">Save</button>
</form>
@endsection

