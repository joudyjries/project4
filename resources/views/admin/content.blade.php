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
                                <h3>{{$category -> name}} </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"> اضافة صنف</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col-1">#</th>
                                                <th class="col-1">الاسم</th>
                                                <th class="col-2">السعر</th>
                                                <th class="col-2">الصورة</th>
                                                <th class="col-3">التفاصيل</th>
                                                <th class="col-3">العمليات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($contents as $content)
                                            <tr>
                                                <th scope="row">{{$content->id}}</th>
                                                <td>{{$content->name}}</td>
                                                <td>{{$content->price}}</td>
                                                <td><img src="{{asset($content->image)}}" style="width:70px;" alt=""></td>
                                                <td>{{$content->description}}</td>
                                                <td> <button type="button" class="btn btn-success" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalEdit{{$content->id}}">
                                                        تعديل صنف
                                                    </button>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalDelete{{$content->id}}">
                                                        حذف صنف
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- modal edit -->
                                            <div class="modal fade" id="exampleModalEdit{{$content->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('content.update' , $content->id)}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">اضافة صنف</h5>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for="recipient-name" class="col-form-label">اسم:</label>
                                                                <input type="text" name="name" class="form-control" id="recipient-name" value="{{$content ->name}}">
                                                                <input type="hidden" name="category_id" id="recipient-name" value="{{$category->id}}">
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for="recipient-name" class="col-form-label">التفاصيل:</label>
                                                                <input type="text" name="description" class="form-control" id="recipient-name" value="{{$content ->description}}">
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for="recipient-name" class="col-form-label">السعر:</label>
                                                                <input type="number" name="price" class="form-control" id="recipient-name" value="{{$content ->price}}">
                                                            </div>

                                                            <div class="modal-body">
                                                                <label for="recipient-name" class="col-form-label">صورة:</label>
                                                                <input type="file" name="image" id="recipient-name">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                                                                <button class="btn btn-secondary" type="submit">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <!-- modal delete -->
                                            <div class="modal fade" id="exampleModalDelete{{$content->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('content.destroy' , $content->id)}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">حذف صنف</h5>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for="recipient-name" class="col-form-label">{{$content -> name}} هل انت متأكد من حذف الصنف</label>
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
        <!-- modal add  -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{route('content.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">اضافة صنف</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="recipient-name" class="col-form-label">اسم:</label>
                            <input type="text" name="name" class="form-control" id="recipient-name" required>
                            <input type="hidden" name="category_id" id="recipient-name" value="{{$category->id}}">
                        </div>
                        <div class="modal-body">
                            <label for="recipient-name" class="col-form-label">التفاصيل:</label>
                            <input type="text" name="description" class="form-control" id="recipient-name" required>
                        </div>
                        <div class="modal-body">
                            <label for="recipient-name" class="col-form-label">السعر:</label>
                            <input type="number" name="price" class="form-control" id="recipient-name" required>
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