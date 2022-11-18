<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from technext.github.io/vegefoods/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jun 2022 20:33:53 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Grow-It</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('assets/front/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/front/css/animate.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/front/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/front/css/aos.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/front/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/front/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/front/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/front/css/style.css') }}">
</head>

<body class="goto-here">
    <?php
    use Illuminate\Support\Facades\Auth;
    use App\Http\controllers\OrderController;
    $Total = 0;
    if (auth()->check()) {
        $Total = OrderController::item_Num();
    }
    ?>

    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">+963 997 962 856</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">Grow-It2000@gmail.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand " href="index-2.html">Grow-It</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('getType') }}" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">other</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{ route('Testimonial.index') }}">Your Opinion</a>
                            {{-- @if (!auth()->check())
                            <a class="dropdown-item" href="{{route('login')}}">Log In</a>

                                @else
                            <a class=" dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @endif --}}

                        </div>
                    </li>
                    <li class="nav-item"><a href="#ftco-section" class="nav-link">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Service</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            @foreach ($types as $type)
                                <a class="dropdown-item"
                                    href="{{ route('getAllCategory', $type->id) }}">{{ $type->name }}</a>
                            @endforeach
                        </div>
                    </li>

                    <li class="nav-item"><a href="{{ route('getAllContact') }}" class="nav-link">Contact</a></li>
                    <li class="nav-item cta cta-colored" style="margin-top: auto;">
                        <a href="{{ route('getAllOrder') }}" class="nav-link"><span
                                class="icon-shopping_cart"></span>[{{ $Total }}]
                        </a>
                    </li>
                    <li>
                        <div class="sidebar-box">
                            <form action="{{ route('search') }}" method="POST" class="search-form">
                                @csrf
                                <div class="form-group">
                                    <span class="icon ion-ios-search"></span>
                                    <input type="text" class="form-control" name="search"
                                        placeholder="Search...">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item">
                        @if (!auth()->check())
                            <a class="nav-link" href="{{ route('login') }}">Log In</a>
                        @else
                            <a class=" nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Log
                                Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endif
                    </li>


                    <li class="nav-item">
                        @if (!auth()->check())
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        @endif
                    </li>
                </ul>

            </div>


        </div>
    </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel" >
            <div class="slider-item" 
                style="background-image:url({{ URL::asset('images/1656977178_bdc0439576eaded9b2c516352f1bba45_62c3771a42a3c.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center"
                        data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center" >
                            <h1 class="mb-2">We Serve All Types Of Plants</h1>
                            <h2 class="subheading mb-4">We deliver Tooles For Plants</h2>
                        </div>

                    </div>
                </div>
        </div>
            <div class="slider-item"
                style="background-image: url({{ URL::asset('images/1656976733_0cf81f9038402e85910cfad17d0051b3_62c3755d445ef.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center"
                        data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">We serve Flowers</h1>
                            <h2 class="subheading mb-4">We deliver organic soil &amp; fertilizer with the Flowers</h2>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slider-item"
                style="background-image: url({{ URL::asset('images/1656976762_919e190d3a24095d669e5bb66899abac_62c3757a7b956.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center"
                        data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">100% Organic &amp; Chemical fertilizer</h1>
                            <h2 class="subheading mb-4">We deliver our produt &amp; to your home</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('content')


    <footer class="ftco-footer ftco-section" id="ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Grow-It</h2>
                        <p>Syria-Aleppo</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="https://www.twitter.com"><span
                                        class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="#ftc-categoryy"class="py-2 d-block">Shop</a></li> {{-- welcome --}}
                            <li><a href="#home-section" class="py-2 d-block">About</a></li> {{-- layout up --}}
                            <li><a href="#prooducts" class="py-2 d-block">Products</a></li>{{-- welcome --}}
                            <li>
                                <a href="{{ route('getAllContact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="shippinginfo" class="py-2 d-block">Shipping Information</a></li>
                                <li><a href="condition" class="py-2 d-block">Returns &amp;
                                        Exchange</a>
                                </li>
                                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">ALfurkan-Ahel Bader
                                        Mosque-Aleppo-Syria</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+963
                                            997 968 853</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">GROW-IT2000@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


    <script src="{{ URL::asset('assets/front/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/aos.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
    </script>
    <script src="{{ URL::asset('assets/front/js/google-map.js') }}"></script>
    <script src="{{ URL::asset('assets/front/js/main.js') }}"></script>


    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>

</body>

<!-- Mirrored from technext.github.io/vegefoods/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jun 2022 20:33:53 GMT -->

</html>
