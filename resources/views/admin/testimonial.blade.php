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
                                <h3> </h3>
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
                                                <th class="col-1">#</th>
                                                <th class="col-1">الاسم</th>
                                                <th class="col-8">التعليق</th>
                                                <th class="col-2">العمليات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($testimonials as $testimonial)
                                            <tr>
                                                <th scope="row">{{$testimonial->id}}</th>
                                                <td>{{$testimonial->user->name}}</td>
                                                <td>{{$testimonial->comment}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalDelete{{$testimonial->id}}">
                                                        حذف تعليق
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- modal delete -->
                                            <div class="modal fade" id="exampleModalDelete{{$testimonial->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('deleteTestimonial' , $testimonial->id)}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">حذف </h5>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for="recipient-name" class="col-form-label">هل انت متأكد من حذف</label>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                                                                <button class="btn btn-secondary" type="submit">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
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