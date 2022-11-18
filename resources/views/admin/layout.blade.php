<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper" style="background-color:aliceblue">
            <a href="index.html">
                <img class="img-fluid for-light" style="width: 80px" src="{{asset('assets/logo.jpg')}}" alt="">
            </a>

        </div>

        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="index.html"></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{route('type.index')}}"><i data-feather="shopping-bag">
                            </i><span>الاصناف</span></a>
                    </li>

                    @foreach($types as $typ)

                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{route('getCategory' , $typ->id)}}"><i data-feather="shopping-bag">
                            </i><span>{{$typ->name}}</span></a>

                        @endforeach
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{route('order.index')}}"><i data-feather="shopping-bag">
                            </i><span>طلبات الشراء</span></a>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{route('contactIndex')}}"><i data-feather="shopping-bag">
                            </i><span>الرسائل</span></a>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{route('comment')}}"><i data-feather="shopping-bag">
                            </i><span>التعليقات</span></a>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{route('getTestimonial')}}"><i data-feather="shopping-bag">
                            </i><span>أراء العملاء</span></a>
                    <li class="sidebar-list">

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span>تسجيل خروج</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>