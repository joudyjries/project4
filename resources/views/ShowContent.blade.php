@extends('layout')
@section('content')
    @if (session()->has('success'))
        <p class="alert alert-success col-6" style="margin-left: auto;">{{ session('success') }}</p>
    @endif


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{ asset($content->image) }}" class="image-popup"><img src="{{ asset($content->image) }}"
                            class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{ $content->name }}</h3>

                    <p class="price"><span>${{ $content->price }}</span></p>
                    <p>{{ $content->description }}</p>
                    <form action="{{ route('addOrder') }}" method="POST">
                        @csrf
                        <div class="input-group col-md-6 d-flex mb-3">
                            <h5> count : </h5>
                            <span class="input-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                    <i class="ion-ios-remove"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="count" class="form-control input-number"
                                value="1" min="1" max="100">
                            <input type="hidden" name="content_id" id="recipient-name" value="{{ $content->id }}">

                            <span class="input-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="ion-ios-add"></i>
                                </button>
                            </span>

                        </div>
                        <p>
                            <button type="submit">Add to Cart</button>
                        </p>
                    </form>
                </div>
                <a href="#comment" class="btn btn-primary py-3 px-5">Add your comment</a>

            </div>
        </div>

    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Comments</span>
                    <h2 class="mb-4">Comment For Product</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">

                        @foreach ($content->comments as $comment)
                            <div class="item">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div class="text text-center">
                                        <p class="mb-5 pl-4 line">{{ $comment->user->name }}</p>
                                        <p class="name">{{ $comment->comment }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Products</span>
                    <h2 class="mb-4">Related Products</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($relateds as $x)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{ route('ShowContent', $x->content->id) }}" class="img-prod"><img class="img-fluid"
                                    src="{{ asset($x->content->image) }}" style="width:17rem; height:12rem ;"
                                    alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="{{ route('ShowContent', $x->content->id) }}">{{ $x->content->name }}</a>
                                </h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">$ {{ $x->content->price }}</span></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="ftco-section contact-section bg-light" id="comment">
        <div class="container">
            <h3>send your Comment</h3>

            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form method="post" action="{{ route('addComment') }}" class="bg-white p-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="content_id" id="recipient-name" value="{{ $content->id }}">
                            <textarea name="comment" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>
@endsection
