@extends('frontend.ngo-site.layout.master')
@section('title',$ngoDetails->english_name.'-')

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
    <div class="col-sm-9 mt-2">
        <div id="demo" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                @if ($sliders)
                    @foreach ($sliders as $key => $slider)
                        <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
                            <img src="{{ asset('storage/slider_image/'.$slider->slider_image) }}"
                                alt="{{ $slider->title }}">
                        </div>
                    @endforeach
                @endif
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div class="row mt-3">
            <div class="col-sm-6">
                <div class="baner-one">
                    @if ($image_video)
                        @if ($image_video->ofType == 'image')
                            <img src="{{ $image_video->src }}" class="w-100">
                        @elseif($image_video->ofType =='video')
                            <embed type="video/webm" src="{{ $image_video->src }}" width="100%"
                                height="293">
                        @endif
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <div class="all-title">
                            <h2>নোটিশ</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="all-notice">
                            <div class="list-group">
                                @foreach ($notices as $notice)
                                    <a href="{{ URL::to('/details-notice/'.$notice->id) }}" class="list-group-item list-group-item-action"><i
                                            class="fa fa-check" aria-hidden="true"></i>
                                        <b></b>{{ $notice->title }}</a>
                                @endforeach
                            </div>
                            <div class="all-item text-right mr-3">
                                <a href="{{ URL::to('/all-notice') }}"><i class="fa fa-forward" aria-hidden="true"></i> সকল নোটিশ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <div class="all-title">
                            <h2>সর্বশেষ আপডেট</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="all-notice">
                            <div class="list-group">
                                @foreach ($notices as $notice)
                                    <a href="{{ URL::to('/details-notice/'.$notice->id) }}" class="list-group-item list-group-item-action"><i
                                            class="fa fa-check" aria-hidden="true"></i>
                                        <b></b>{{ $notice->title }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mt-3">
                <div class="card">
                    <div class="py-2 cardheader">
                        <div class="all-title">
                            <h2>সেবাসমূহ</h2>
                        </div>
                    </div>
                </div>
            </div>
            @if ($services)
                @foreach ($services as $service)
                    <div class="col-sm-6 mt-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="all-title">
                                    <h2>{{ $service->title }}</h2>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="all-notice">
                                    <div class="list-group">
                                        @foreach ($service->details->where('status', 'active') as $detail)
                                            <a href="{{ $detail->link }}" target="_blank" class="list-group-item list-group-item-action"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                                <b></b>{{ $detail->title }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection

{{-- admin content --}}
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
                                <button class="btn  mt-2 px-3 modal-btn" data-toggle="modal" data-target="#myModal" onclick="getImage(this,{{ $admin }})" id="detailBtn">Details</button>
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
                                            <div ><strong>Name:- </strong><span id="admin_name"></span></div>
                                            <div ><strong>Title:- </strong><span id="admin_title"></span></div>
                                            <div ><strong>Designation:-</strong><span id="admin_designatiom"></span>
                                            </div>
                                            <div ><strong>Join-Date:-</strong><span id="admin_join_date"></span></div>
                                            <div ><strong>Phone: -</strong> <span id="admin_phone"></span></div>
                                            <div><strong>Email:- </strong><span id="admin_email"></span></div>
                                            <div ><strong>Message:-</strong><span id="admin_message"></span></div>
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
                    <h2>NGO Login</h2>
                </div>
            </div>
            <div class="p-2">
            <form class="px-3 py-1 login-sidebar mt-1" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-sm" id="email"
                        placeholder="Enter email" name="email">
                </div>
                <div class="form-group mb-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control form-control-sm" id="password" placeholder="Enter password" name="password">
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




