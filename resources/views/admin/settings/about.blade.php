@extends('admin.adminpanel')
@section('title', 'About Page Settings')
@section('jumbo')
<li class="breadcrumb-item"><a href="/admin/settings">Settings</a></li>
<li class="breadcrumb-item active" aria-current="page">About Page Settings</li>
@endsection
@section('content')
<div class="container mt-5">
    <h2>About Page Settings</h2>
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="biographyTextarea">Biography</label>
                <textarea class="form-control" id="biographyTextarea" name="biography" rows="5">{{ $data->biography}}</textarea>
            </div>
            <div class="form-group col-md-3">
                <label for="imageInput">Upload Image</label>
                <input type="file" class="form-control" id="imageInput" name="aboutimage" value="">{{ $data->aboutimage}}
            </div>
            <div class="form-group col-md-4">
                <label for="emailInput">Email</label>
                <input type="email" class="form-control" id="emailInput" name="email" value="{{ $data->email }}">
            </div>

            <div class="form-group col-md-4">
                <label for="phoneInput">Phone</label>
                <input type="tel" class="form-control" id="phoneInput" name="phone" value="{{ $data->phone }}">
            </div>

            <div class="form-group col-md-4">
                <label for="addressInput">Address</label>
                <input type="text" class="form-control" id="addressInput" name="address" value="{{ $data->address }}">
            </div>


        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="skillInput1">Skill 1</label>
                <input type="text" class="form-control skillInput" placeholder="Enter skill" name="skills[]" value="{{ $data->skills[0]}}">
            </div>
            <div class="form-group col-md-4">
                <label for="skillInput2">Skill 2</label>
                <input type="text" class="form-control skillInput" placeholder="Enter skill" name="skills[]" value="{{ $data->skills[1]}}">
            </div>
            <div class="form-group col-md-4">
                <label for="skillInput3">Skill 3</label>
                <input type="text" class="form-control skillInput" placeholder="Enter skill" name="skills[]" value="{{ $data->skills[2]}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="skillInput4">Skill 4</label>
                <input type="text" class="form-control skillInput" placeholder="Enter skill" name="skills[]" value="{{ $data->skills[3]}}">
            </div>
            <div class="form-group col-md-4">
                <label for="skillInput5">Skill 5</label>
                <input type="text" class="form-control skillInput" placeholder="Enter skill" name="skills[]" value="{{ $data->skills[4]}}">
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
