@extends('layout')
@section('content')
    <br>

    <section class="ftco-section ftco-category ftco-no-pt" >
        <div class="container" id="ftc-categoryy">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 order-md-last align-items-stretch d-flex">
                            <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex"
                                style="background-image: url(images/tools/indoor-gardening-tools.jpg);">
                                <div class="text text-center" >
                                    <h2>Tools</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                                style="background-image: url(images/watering/Hinastar_Lawn_Sprinkler.jpg);">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">watering</a></h2>
                                </div>
                            </div>
                            <div class="category-wrap ftco-animate img d-flex align-items-end"
                                style="background-image: url(images/soil/iStock-1125784405.jpg);">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">Soil</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                        style="background-image: url(images/1656977163_a26e174e330476756d2601ea5368aec3_62c3770b9de26.jpg);">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="#">Plants</a></h2>
                        </div>
                    </div>
                    <div class="category-wrap ftco-animate img d-flex align-items-end"
                        style="background-image: url(images/same-day-flower-delivery-Singapore.png);">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="#">Flowers</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="prooducts">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Our Products</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($types as $type)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{ route('getAllCategory', $type->id) }}" class="img-prod"><img class="img-fluid"
                                    src="{{ asset($type->image) }}" style="width:17rem; height:12rem ;"
                                    alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="{{ route('getAllCategory', $type->id) }}">
                                        {{ $type->name }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Reviews about our site</span>
                    <h2 class="mb-4">Our satisfied customer says</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">

                        @foreach ($testimonials as $testimonial)
                            <div class="item">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div class="text text-center">
                                        <p class="mb-5 pl-4 line">{{ $testimonial->comment }}</p>
                                        <p class="name">{{ $testimonial->user->name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>
@endsection
