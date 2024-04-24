<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343A40;
        }

        .login-container {
            margin-top: 5%;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center login-container">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-header text-center">{{ $formTitle }}</h3>

                    <div class="card-body">
                        <form method="POST" action="{{$isRegister?route('register'):route('login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="email">E-Mail Address</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>

                            @if($isRegister)
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                                    placeholder="Confirm Password">
                            </div>
                            @endif

                            <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
                            @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
