@extends('layout')
@section('content')

@if(session()->has('success'))
<p class="alert alert-success col-6" style="margin-left: auto;">{{session('success')}}</p>
@endif

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <h3>send your problem</h3>

        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form method="post" action="{{route('addContact')}}" class="bg-white p-5 contact-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Your Phone *">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7"  class="form-control" placeholder="Message"></textarea>
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