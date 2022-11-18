<!DOCTYPE html>
<html lang="en">

<head>
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
                        <div class="row">
                            <div class="col-6">
                                <h3> طلبات الشراء</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col-2">#</th>
                                                <th class="col-2">الاسم</th>
                                                <th class="col-3">الصنف</th>
                                                <th class="col-3">العدد</th>
                                                <th class="col-3">السعر الكلي</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <th scope="row">{{$order->id}}</th>
                                                <td>{{$order->user->name}}</td>
                                                <td>{{$order->content->name}}</td>
                                                <td>{{$order->count}}</td>
                                                <td>{{$order->content->price * $order->count}}</td>

                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Container-fluid Ends-->
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