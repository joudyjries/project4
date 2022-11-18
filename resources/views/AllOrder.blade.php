@extends('layout')
@section('content')
   @if (session()->has('success'))
        <p class="alert alert-success col-6" style="margin-left: auto;">{{ session('success') }}</p>
    @endif

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>Product name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $x)
                                    <tr class="text-center">

                                        <td class="image-prod">
                                            <div class="img"
                                                style="background-image:url({{ asset($x->content->image) }});"></div>
                                        </td>

                                        <td class="product-name">
                                            <h3>{{ $x->content->name }}</h3>
                                        </td>

                                        <td class="price">${{ $x->content->price }}</td>

                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="text" name="quantity"
                                                    class="quantity form-control input-number" readonly
                                                    value=" {{ $x->total }}">
                                            </div>
                                        </td>

                                        <td class="total">${{ $x->total * $x->content->price }}
                                        </td>
                                        {{-- <td>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-original-title="test"
                                                data-bs-target="#exampleModalDelete{{ $orders }}">
                                                حذف صنف
                                            </button>
                                        </td> --}}


                                    </tr><!-- END TR-->
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </section>
   

@endsection