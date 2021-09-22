@extends('frontend.ngo-site.layout.master')
@section('title',$ngoDetails->english_name.'-Gallery-')
@section('logo')
    <div class="logo-box">
        <div class="logo">
            <a href="#"><img src="{{ asset('storage/ngo_logo/'.$ngoDetails->logo) }}" class="d-inline logo ml-3"></a>
        </div>
        <div class="logo logo-title">
            <h1 class="d-inline ml-3 logo-title">{{ $ngoDetails->english_name }}</h1>
        </div>
    </div>
@endsection
@section('main-content')
    <div class="col-sm-9">
        <div class="row mt-2">
            <div class="col-sm-4">
                <div class="card car">
                  <style>
                    .img img {
                        height: 51px;
                        width: 85px;
                        object-fit: cover;
                    }
                      .gallery-title h3 {
                            color: black;
                            font-size: 14px;
                        }
                </style>
                    <div class="scroll-gallery scrollbar"  id="style-4">
                        <ul class="dashboard-list card-body">
                            @foreach ($galleries as $i => $pt)
                                <li>
                                    <a href="{{ URL::to($ngoDetails->slug.'/gallery/'.$pt->id) }}" class="{{ $i==0 ? ' active' : '' }}">
                                        <div class="left-gallery border p-2">
                                            @foreach($pt->photo as $key => $ph)
                                                @if($key == 0)
                                                    <div class="img">
                                                        <img src="{{ asset('storage/photo_gallery/'. $ph) }}" alt="first">
                                                    </div>
                                                @elseif ($key == 1)
                                                    <div id="imag" class="img">
                                                        <img src="{{ asset('storage/photo_gallery/'. $ph) }}" alt="first">
                                                        <i class="fa g-shadow fa-plus" aria-hidden="true"></i>
                                                    </div>
                                                    @break
                                                @else
                                                @break
                                                @endif
                                            @endforeach
                                        </div>
                                    </a>
                                    <div class="gallery-title">
                                            <h3>{{ Str::limit($pt->title, 30),' (...)' }}</h3>
                                        </div>
                                    <br>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div >
                    @foreach ($galleries as $k => $photo)
                        @if ($k >0)
                            @break
                        @endif
                        <div id="home_{{ $k }}">
                            <div class="card">
                                <div class="card-header">
                                    <div class="all-title">
                                        <h2>{{  Str::limit($photo->title, 30),' (...)' }}</h2>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="slider slider-for">
                                        @foreach ($photo->photo as $key => $pho)
                                            <div>
                                                <img
                                                src="{{ asset('storage/photo_gallery/' . $pho) }}"
                                                class="gallery w-100">
                                            </div>
                                        @endforeach
                                    </div>
                                    <div>
                                        {{ $photo->description }}
                                    </div>

                                    <div class="slider slider-nav mt-5">
                                        @foreach ($photo->photo as $po)
                                            <div >
                                                <img  src="{{ asset('storage/photo_gallery/' . $po) }}"class="gallery2 w-100 ">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('admin-content')
    <div class="col-sm-3">
        @if ($admins)
            @foreach ($admins as $admin)
                <div class="card position-mt mt-2">
                    <div class="card-header">
                        <div class="all-title">
                            {{-- <h2>জেলা প্রশাসক</h2> --}}
                            <h2>{{ $admin->title }}</h2>
                        </div>
                    </div>
                    <style>

                    </style>
                    <div class="card-body">
                        <div class="overlay">
                            <div class="textt">
                                <!--বার্তা-->
                                <button class="btn  mt-2 px-3 modal-btn" data-toggle="modal" data-target="#myModal"
                                    onclick="getImage(this,{{ $admin }})" id="detailBtn">Details</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('storage/administrator_image/' . $admin->image) }}"
                                class="card-img-top cardimgtop">

                            <h3 class="text-center">{{ $admin->name }}</h3>
                            <div class="text-center card-text mb-2"><a href="{{ URL::to('administrator/message/'.$admin->id) }}">বার্তা</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <!--   Modal Section-->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modaldialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title">
                        </h4>
                        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card">
                                                <img class="card-img-top" id="admin-modal-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="card-body">
                                        <div class="name-title">
                                            <div><strong>Name:- </strong><span id="admin_name"></span></div>
                                            <div><strong>Title:- </strong><span id="admin_title"></span></div>
                                            <div><strong>Designation:-</strong><span id="admin_designatiom"></span>
                                            </div>
                                            <div><strong>Join-Date:-</strong><span id="admin_join_date"></span></div>
                                            <div><strong>Phone: -</strong> <span id="admin_phone"></span></div>
                                            <div><strong>Email:- </strong><span id="admin_email"></span></div>
                                             <div><strong>Message:-</strong><span id="admin_message"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="background-color:#78a8b8;">
                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--   End Modal Section-->
        <div class="card mt-3">
            <div class="card-header">
                <div class="all-title">
                    <h2>NGO Login </h2>
                </div>
            </div>
            <div class="p-2">
                <form class="px-3 py-1 login-sidebar mt-1" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-sm" id="email" placeholder="Enter email"
                            name="email">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control form-control-sm" id="password"
                            placeholder="Enter password" name="password">
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="ml-3 my-2">
                            <button type="submit" class="btn btnn btn-success btn-sm px-3">Login</button>
                        </div>
                        <div class="mr-3 my-2">
                            <a href="{{ URL::to('register') }}" style="color: white">Register</a>
                            {{-- <button type="submit" class="btn btnn btn-success btn-sm">login</button> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <div class="all-title">
                    <h2>জরুরি হটলাইন</h2>
                </div>
            </div>
            <div class="card-body">
                <div class="banner">
                    <img src="{{ asset('img/National-Helpline.jpg') }}" class="w-100">
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <div class="all-title">
                    <h2>All Categories</h2>
                </div>
            </div>
            <div class="card-body">
                <div class="categories">
                    <a href="category.html" class="w-100">Category Search</a>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <div class="categories">
                    <a href="list-ngo.html" class="w-100">List Of Ngo</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
{{-- script for gallery page --}}
    <script>
        $(document).ready(function() {

            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: true,
                centerMode: true,
                focusOnSelect: true,

                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: false
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: false
                        }
                    }
                ]
            });
        })
    </script>
@endpush
