@extends('layout')
@section('content')


<br>
<section class="ftco-section">
    <div class="container">
       
        <div class="row">
            @foreach($contents as $content)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{route('ShowContent' , $content->id)}}" class="img-prod"><img class="img-fluid" src="{{asset($content->image)}}" style="width:17rem; height:12rem ;" alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="{{route('ShowContent' , $content->id)}}">{{$content->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="price-sale">$ {{$content->price}}</span></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


<hr>

@endsection