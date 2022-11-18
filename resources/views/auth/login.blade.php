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

    <section class="ftco-section contact-section bg-light">
        <div class="container">

            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form method="post" action="{{route('login')}}" class="bg-white p-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Your password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" value="LOG In" class="btn btn-primary py-3 px-5">
                            <h5 >OR</h5>
                            <a href="{{route('register')}}" class="btn btn-primary py-3 px-5">register</a>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>


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