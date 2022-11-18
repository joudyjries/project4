@extends('layout')
@section('content')
    <br>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">{{ $type->name }}</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{ route('getAllContent', $category->id) }}" class="img-prod"><img class="img-fluid"
                                    src="{{ asset($category->image) }}" style="width:17rem; height:12rem ;"
                                    alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="{{ route('getAllContent', $category->id) }}">{{ $category->name }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <hr>
@endsection
