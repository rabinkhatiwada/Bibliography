@extends('admin.adminpanel')
@section('title', 'About Page Settings')
@section('jumbo')
<li class="breadcrumb-item"><a href="/admin/settings">Settings</a></li>
<li class="breadcrumb-item active" aria-current="page">Footer Settings</li>
@endsection
@section('content')
<div class="container mt-5">
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="footerHeadingLogo">Footer Heading or Logo</label>
            <input type="text" class="form-control" id="footerHeadingLogo" name="footer_heading_logo" placeholder="Enter footer heading or logo" value="{{ $data->footer_heading_logo ?? '' }}">
        </div>
        <div class="form-group">
            <label for="footerParagraph">Paragraph</label>
            <textarea class="form-control" id="footerParagraph" name="footer_paragraph" rows="5" placeholder="Enter paragraph">{{ $data->footer_paragraph ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label>Social Media Links</label>
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                        </div>
                        <input type="text" class="form-control" name="facebook_link" placeholder="Facebook link" value="{{ $data->facebook_link ?? '' }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                        </div>
                        <input type="text" class="form-control" name="instagram_link" placeholder="Instagram link" value="{{ $data->instagram_link ?? '' }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                        </div>
                        <input type="text" class="form-control" name="linkedin_link" placeholder="LinkedIn link" value="{{ $data->linkedin_link ?? '' }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                        </div>
                        <input type="text" class="form-control" name="youtube_link" placeholder="YouTube link" value="{{ $data->youtube_link ?? '' }}">
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
