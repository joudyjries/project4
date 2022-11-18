<!DOCTYPE html>
<html lang="en">

<head>e
    <title>Grow It</title>

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
    <!-- Responsive css-->
</head>

<body>

    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->

        @if(session()->has('success'))
        <p class="alert alert-success col-6" style="margin-left: auto;">{{session('success')}}</p>
        @endif
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('admin.layout')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">

                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6 box-col-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Visetor</span>
                                                            <h3 class="total-num counter">{{$visitor}}</h3>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 box-col-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Customer</span>
                                                            <h3 class="total-num counter">{{$customer}}</h3>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 box-col-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span><a href="order" style="color:rgb(92, 86, 86)">Order</a></span>
                                                            <h3 class="total-num counter">{{$orders}}</h3>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
        </div>
        <!-- modal add  -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{route('type.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">اضافة صنف</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="recipient-name" class="col-form-label">اسم:</label>
                            <input type="text" name="name" class="form-control" id="recipient-name" required>
                        </div>
                        <div class="modal-body">
                            <label for="recipient-name" class="col-form-label">صورة:</label>
                            <input type="file" name="image" id="recipient-name" required>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-secondary" type="submit">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- latest jquery-->
    <script src="{{URL::asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{URL::asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{URL::asset('assets/js/scrollbar/custom.js')}}"></script>

    <script src="{{URL::asset('assets/js/sidebar-menu.js')}}"></script>
    <script src="{{URL::asset('assets/js/script.js')}}"></script>
</body>

</html>