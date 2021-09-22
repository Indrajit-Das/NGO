@extends('frontend.main-site.layout.master')
@section('title','Login-')
@section('main-content')
    <div class="col-sm-9 ">
        <div class="containe card mt-2">
           <div class="card-header">
                            <h4 class="card-title text-center">Admin Login</h4>
                        </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 mt-5">
                    <div class="card">

                        <div class="card-body">
                            <section class="login-content">
                                <div class="login-box">
                                    <form class="login-form" action="{{ URL::to('/login') }}" method="post">
                                        @csrf
                                        <div class="form-group mb-3">
                                            @if($errors->any())
                                                <span class="error-msg" style="color: red">Something went wrong !</span>
                                                <br>
                                                <br>
                                            @endif
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                </div>
                                                <input type="text" id="email" name="email" class="form-control form-control-sm" placeholder="Email Address" type="email" name="email" value="{{ old('email') }}" required autofocus >
                                            </div>

                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input type="password" id="password" class="form-control form-control-sm" placeholder="Password" type="password" name="password" required autocomplete="current-password" >
                                            </div>
                                            <span class="error-msg"></span>
                                        </div>
                                        <div class="form-group btn-container ">
                                            <div class="form-group ">
                                                <button type="submit" class="btn btnn  w-100 text-white" name="login"> Login </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </section>
                        </div>
                    </div>
                    <br><br><br>
                </div>
                <div class="col-sm-3"></div>
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
                            <h2>{{ $admin->title }}</h2>
                        </div>
                    </div>
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
                    <h2>NGO Login </h2>
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
