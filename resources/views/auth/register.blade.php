<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from technext.github.io/vegefoods/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jun 2022 20:33:53 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Grow It</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('assets/front/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/animate.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/front/css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/front/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{URL::asset('assets/front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/style.css')}}">
</head>

<body class="goto-here">

    <!-- Login -->
    <div class="login-page d-flex align-items-center vh-100">
        <div class="overlay"></div>
        <div class="login-form">
            <!-- Container -->
            <div class="container">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-social-icon">
                        <h2>Register</h2>

                    </div>
                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-user"></i></span>

                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="inputUsername" value="{{ old('name') }}" tabindex="1" placeholder="name" required>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-user"></i></span>

                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="inputEmail" value="{{ old('email') }}" tabindex="1" placeholder="Your Email.." required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-lock"></i></span>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="inputPassword" tabindex="2" placeholder="password" required>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-lock"></i></span>
                        <input type="password" class="form-control" name="password_confirmation" id="inputPassword" tabindex="2" placeholder="password confirmation" required>

                    </div>



                    <div class="row justify-content-center mb-md-3">
                        {{-- <div class="col-sm-6 mb-md-3 mb-sm-0">
                            <button type="submit" class="btn btn-primary py-3 px-5">Register</button>
                        </div> --}}
                        <div class="form-group">
                            <input type="submit" value="Register" class="btn btn-primary py-3 px-5" style="margin: 20px ">
                        </div>

                </form>
            </div>
            <!-- /Container -->
        </div>
    </div>
    <!-- /Login -->

    <script src="{{URL::asset('assets/front/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/jquery.stellar.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/aos.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
    <script src="{{URL::asset('assets/front/js/google-map.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/main.js')}}"></script>

</body>

<!-- Mirrored from technext.github.io/vegefoods/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jun 2022 20:33:53 GMT -->

</html>