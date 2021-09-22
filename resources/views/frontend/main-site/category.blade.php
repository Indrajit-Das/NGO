<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ngo Portal</title>
    {{-- <link rel="stylesheet" type="text/css" href="asstes/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="asstes/css/style.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--All Header Section-->
    <div class="container">
        <!--Top Header-->
        <div class="top-header">
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="logo-box">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('/img/gov.png') }}" class="d-inline logo ml-3"></a>
                        </div>
                        <div class="logo logo-title">
                            <h1 class="d-inline ml-3 logo-title">জেলা এনজিও পোর্টাল</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="log-in float-right">
                        <div class="input-group">
                            <div class="log-two">
                                <a href="{{ URL::to('/login') }}"> <i class="fa fa-user" aria-hidden="true"></i> Admin Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------------End Top Header--------------------->
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-md bg-dark">
                    <!-- Brand -->
                    <!--                    <a class="navbar-brand" href="index.html"><i class="fa fa-home" aria-hidden="true"></i></a>-->
                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </button>
                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse ml-3" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
                                    About <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdownmenu">
                                    <a class="dropdown-item" href="{{ URL::to('/mission') }}">Our Mission</a>
                                    <a class="dropdown-item" href="{{ URL::to('/history') }}">Our History</a>
                                    <a class="dropdown-item" href="{{ URL::to('/profile') }}">Profile</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/responsibility') }}">Our Responsibility</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/committee') }}">Executive Committee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/gallery') }}">Photo Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/all-notice') }}">Notice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/list-ngo') }}">List Of Ngo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/contact-us') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!------------End All Header Section---------------->
    <!---------------All Body Section-------------->
    <div class="container my-2">
        <div class="row">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header">
                        <div class="widget widget-search">
                            <form role="search" method="get" class="search-form" action="#">
                                <input type="search" class="form-control" placeholder="Search posts here..." name="s" required="">
                                <button type="submit" class="search-submit" title="Search">
                                    <i class="icon-search fa fa-search"></i>
                                    <span class="sr-only">Search</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="admin-date">
                            <h3 class="d-inline title">তালিকা</h3>
                            <div class="from">পূর্বের সকল তালিকা</div>
                            <div class="d-inline date float-right">2021-02-13
                            </div>
                        </div>
                        <!--Table-->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>NgoName </th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div>ব্র্যক শিক্ষা কর্মসূচী</div>
                                    </td>
                                    <td>
                                        <div>BRAC</div>
                                    </td>
                                    <td><a href="">Details</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>স্বরণীকা প্রকাশণায় অংশগ্রহণ ইচ্ছুক এনজিও/সংস্থার নামের তালিকা প্রকাশ ও করণীয় সংক্রান্ত জরুরী নোটিশ</div>
                                    </td>
                                    <td>
                                        <div>BRAC</div>
                                    </td>
                                    <td><a href="">Details</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>স্বরণীকা প্রকাশণায় অংশগ্রহণ ইচ্ছুক এনজিও/সংস্থার নামের তালিকা প্রকাশ ও করণীয় সংক্রান্ত জরুরী নোটিশ</div>
                                    </td>
                                    <td>
                                        <div>2021-02-13</div>
                                    </td>
                                    <td><a href="">Details</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>স্বরণীকা প্রকাশণায় অংশগ্রহণ ইচ্ছুক এনজিও/সংস্থার নামের তালিকা প্রকাশ </div>
                                    </td>
                                    <td>
                                        <div>2021-02-13</div>
                                    </td>
                                    <td><a href="">Details</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>স্বরণীকা প্রকাশণায় অংশগ্রহণ ইচ্ছুক এনজিও/সংস্থার নামের তালিকা প্রকাশ ও করণীয় সংক্রান্ত জরুরী নোটিশ</div>
                                    </td>
                                    <td>
                                        <div>2021-02-13</div>
                                    </td>
                                    <td><a href="">Details</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>স্বরণীকা প্রকাশণায় অংশগ্রহণ ইচ্ছুক এনজিও/সংস্থার নামের তালিকা প্রকাশ </div>
                                    </td>
                                    <td>
                                        <div>2021-02-13</div>
                                    </td>
                                    <td><a href="">Details</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>স্বরণীকা প্রকাশণায় অংশগ্রহণ ইচ্ছুক এনজিও/সংস্থার নামের তালিকা প্রকাশ </div>
                                    </td>
                                    <td>
                                        <div>2021-02-13</div>
                                    </td>
                                    <td><a href="">Details</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-------------------------End Table----------------------------------->
                    </div>
                    <div class="card-footer">
                        <ul class="pagination float-right mb-0">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
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
                                <button class="btn  mt-2 px-3 modal-btn" data-toggle="modal" data-target="#myModal" onclick="getImage(this)" id="detailBtn">Details</button>
                                <style>
                                    .modal-btn{
                                        color:white;
                                        background-color: #407676;
                                    }
                                </style>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('storage/administrator_image/' . $admin->image) }}"
                                class="card-img-top cardimgtop">

                            <h3 class="text-center">{{ $admin->name }}</h3>
                            <div class="text-center card-text mb-2"><a href="#">বার্তা</a></div>
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
                                            <div><strong>Title:- </strong>Abdul Zabbar</div>
                                            <div><strong>Designation:-</strong> Lorem ipsum dolor sit amet, consectetur.
                                            </div>
                                            <div><strong>Message:-</strong> Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Nesciunt, eius, adipisci!</div>
                                            <div><strong>Ttatus:-</strong> </div>
                                            <div><strong>Join-Date:-</strong></div>
                                            <div><strong>Leave-Date:-</strong></div>
                                            <div><strong>Order-No:-</strong></div>
                                            <div><strong>Phone: -</strong> 00+124687+98</div>
                                            <div><strong>Email:- </strong> abdcd@gmail.com</div>
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
                    <h2>Admin Login</h2>
                </div>
            </div>
            <div class="card-body">
            <form class="px-3 py-1 login-sidebar mt-1"  method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-sm" id="email"
                        placeholder="Enter email" name="email">
                </div>
                <div class="form-group mb-2">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control form-control-sm" id="pwd"
                        placeholder="Enter password" name="pswd">
                </div>
                <button type="submit" class="btn btnn btn-success btn-sm">Submit</button>
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
        </div>
    </div>
    <!--End All Body Section-->

    <div class="scrolltop float-right">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn">
        </i>
    </div>

    <!--Footer Section-->
    <div class="footer py-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="footer-content text-center">
                        <div>সার্বিক তত্ত্বাবধানে
                        </div>
                        <div>জেলা প্রশাসকের কার্যালয়, ঢাকা</div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="footer-content text-center">
                        <div>সার্বিক সহযোগিতায়
                        </div>
                        <div>ঢাকা জেলায় কর্মরত এনজিও সমূহ</div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="footer-copyright text-center">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://technosoft.com.bd/" target="_blank">Technosoft Bangladesh</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer Section-->
    <script src="asstes/js/jquery.min.js"></script>
    <script src="asstes/js/popper.min.js"></script>
    <script src="asstes/js/bootstrap.min.js"></script>
    <script src="asstes/js/min.js"></script>
</body></html>
