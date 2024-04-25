@extends('app')
@section('title','Portfolio')
@section('content')
<div class="main">
    @php
        $data=App\Helper::getHomeSetting();
    @endphp
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-xs-12">
                <div class="first-div">
                    <h1 id="heading">{!! $data->title !!}</h1>
                    <p>
                        {!! $data->paragraph1 !!}
                    </p>
                    <p>
                        {!! $data->paragraph2 !!}
                    </p>
                    <button class="btn btn-outline-success hire" type="submit">{!! $data->button_text !!}</button>
                    <div class="datas">
                        <x-data :count="'100M'" :type="'Youtube Views'" />
                        <x-data :count="'5M'" :type="'Subscribers'"/>
                        <x-data :count="'8M'" :type="'Followers'"/>
                    </div>

                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-xs-12">
                <div class="second-div"> <img src="{{asset( $data->image)}}" alt="Bg-Image">

                </div>
            </div>
        </div>
    </div>
@endsection
