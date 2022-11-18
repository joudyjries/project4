

<!doctype html>
<html lang="zxx">


<!-- Mirrored from bnker.netlify.app/rtl/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2022 16:04:33 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- /Required meta tags -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- /Favicon -->

    <!-- All CSS -->


    <!-- Vendor Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/vendors.css')}}">
    <!-- /Vendor Css -->

    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/plugins.css')}}">
    <!-- Plugin Css -->

    <!-- Icons Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/icons.css')}}">
    <!-- /Icons Css -->

    <!-- Style Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/style.css')}}">
    <!-- /Style Css -->

    <!-- /All CSS -->
    <!-- /All CSS -->

</head>

<body>

    <!-- Login -->
    <div class="login-page d-flex align-items-center vh-100">
        <div class="overlay"></div>
        <div class="login-form">
            <!-- Container -->
            <div class="container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-social-icon">
                        <h2>Login</h2>

                    </div>

                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-user"></i></span>

                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="inputUsername" value="{{ old('email') }}" tabindex="1" placeholder="Username" required>
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



                    <div class="row justify-content-center mb-md-3">
                        <div class="col-sm-6 mb-md-3 mb-sm-0">
                            <button type="submit" class="btn theme-btn-1">Log In</button>
                        </div>
                        <h5 style="text-align: center;">OR</h5>
                        <div class="col-sm-6 mb-md-3 mb-sm-0">
                            <a href="{{route('register')}}" class="btn theme-btn-1">register</a>
                        </div>

                    </div>

                </form>
            </div>
            <!-- /Container -->
        </div>
    </div>
    <!-- /Login -->

    <!-- JS -->

    <!-- Vendor Js -->
    <script src="{{URL::asset('assets/front/js/vendors.js')}}"></script>
    <!-- /Vendor js -->

    <!-- Plugins Js -->
    <script src="{{URL::asset('assets/front/js/plugins.js')}}"></script>
    <!-- /Plugins Js -->

    <!-- Main JS -->
    <script src="{{URL::asset('assets/front/js/main.js')}}"></script>
    <!-- /Main JS -->

    <!-- /JS -->

</body>


<!-- Mirrored from bnker.netlify.app/rtl/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2022 16:04:33 GMT -->

</html>