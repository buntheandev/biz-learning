<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Login</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Start css -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End css -->
    <style>
        .auth-box .auth-box-right .form-head img{
            width: 60px;
        }
    </style>
</head>
<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                   <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-head">
                                            <span style="font-size: 25px; font-weight: bold; text-transform: uppercase;color: #0d70d3e6;">Biz Learning</span>
                                        </div>
                                        <h4 class="text-primary my-4" style="text-transform: uppercase;font-weight: bold;">Log in !</h4>
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in</button>
                                    </form>
                                    <p class="mb-0 mt-3">Don't have a account? <a href="{{ route('register') }}">Sign up</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
</body>
</html>
