@extends('app')
@section('title','Contact')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="text-center mb-4">Drop Me a Message</h2>
                    <form class="contact" action="{{ url('/') }}/sendmsg" method="post">
                        @csrf
                        <div class="form-group mt-1">
                            <label for="name">Your Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{old('name')}}">
                            <span class="text-danger">
                                @error('name')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group mt-2">
                            <label for="email">Email Address:</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{old('email')}}">
                            <span class="text-danger">
                                @error('email')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group mt-2">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
                            <span class="text-danger">
                                @error('message')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="text-start">
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>




@endsection
