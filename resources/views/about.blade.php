@extends('app')
@section('title', 'About')
@section('content')
    <section class="about-section">
        <h1 id="section-heading">About Me</h1>
        @php
            $data = App\Helper::getAboutSetting();
        @endphp
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xl-4 col-xs-12">
                <div class="biography abt">
                    <h2>Biography</h2>
                    <p>{!! $data->biography !!}</p>
                </div>
                <div class="contact">
                    <h2>Contact Information</h2>
                    <p><i class="fa fa-envelope"></i> Email: {!! $data->email !!}</p>
                    <p><i class="fa fa-phone"></i> Phone: {!! $data->phone !!}</p>
                    <p><i class="fa fa-phone"></i> Address: {!! $data->address !!}</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xl-4 col-xs-12">
                <div class="about-img"><img src="{{ asset($data->aboutimage) }}" alt="My-Image"></div>
            </div>
            <div class="col-sm-12 col-md-12 col-xl-4 col-xs-12 skill">
                <h2>Skills</h2>
                <ul class="skills">
                    @foreach($data->skills as $skill)
                        <li><i class="fa-solid fa-square"></i> {!! $skill !!}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
