<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('storage/frontend/'.$frontendLogoAndNameSetting->logo) }}" sizes="16x16">
    <title>@yield('title'){{ config('app.name') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/css/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/css/all.min.css') }}">
</head>

<body>
    <!----------------All Header Section------------------------->
    <div class="sticky-top">
        <div class="container  all-header">
            <!-----------------------Top Header-------------------->
            <div class="top-header">
                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <div class="logo-box">
                            <div class="logo">
                                <a href="{{ URL::to('/') }}"><img src="{{ asset('storage/frontend/'.$frontendLogoAndNameSetting->logo) }}"
                                        class="d-inline logo ml-3"></a>
                            </div>
                            <div class="logo logo-title">
                                <h1 class="d-inline ml-3 logo-title">{{ $frontendLogoAndNameSetting->name }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="log-in float-right">
                            <div class="input-group">
                                <div class="log-two">
                                    <a href="{{ URL::to('/login') }}"> <i class="fa fa-user" aria-hidden="true"> </i>
                                        Admin Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------End Top Header-------------------->
            <!---------------------------Main Header------------------------------->
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-md">
                        <!-- Brand -->
                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                        </button>
                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse ml-3" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('/') ? ' activee' : '' }}"
                                        href="{{ URL::to('/') }}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link {{ request()->is('mission') || request()->is('history') || request()->is('profile') ? ' activee' : '' }}"
                                        href="#" id="navbardrop" data-toggle="dropdown">
                                        About
                                    </a>
                                    <div class="dropdown-menu dropdownmenu">
                                        <a class="dropdown-item" href="{{ URL::to('/mission') }}">Our Mission</a>
                                        <a class="dropdown-item" href="{{ URL::to('/history') }}">Our History</a>
                                        <a class="dropdown-item" href="{{ URL::to('/profile') }}">Profile</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('responsibility') ? ' activee' : '' }}"
                                        href="{{ URL::to('/responsibility') }}">Our Responsibility</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('committee') ? ' activee' : '' }}"
                                        href="{{ URL::to('/committee') }}">Executive Committee</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('gallery') || request()->segment(1) == 'gallery' ? ' activee' : '' }}"
                                        href="{{ URL::to('/gallery') }}">Photo Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('all-notice') || request()->segment(1) == 'details-notice' ? ' activee' : '' }}"
                                        href="{{ URL::to('/all-notice') }}">Notice</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('list-ngo') ? ' activee' : '' }}"
                                        href="{{ URL::to('/list-ngo') }}">List Of Ngo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('contact-us') ? ' activee' : '' }}"
                                        href="{{ URL::to('/contact-us') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!---------------------------Main Header------------------------------->
    </div>
    <!---------------------End All Header Section--------------------->
    <!--------------All Body Section-------------------->
    <div class="container">
        <section class="content-one">
            <div class="row">
                @section('main-content')
                @show
                @section('admin-content')
                @show
            </div>
        </section>
    </div>

    <div class="scrolltop float-right">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn">
        </i>
    </div>

    <!------------------End All Body Section------------------->
    <!-------------------Footer Section---------------------->
    <div class="container mt-2">
        <div class="footer py-4">
            <div class="row">
                <div class="col-sm-4">
                    <div class="footer-content text-center">
                        <div>সার্বিক তত্ত্বাবধানে
                        </div>
                        <div>জেলা প্রশাসকের কার্যালয়, বাগেরহাট</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-content text-center">
                        <div>সার্বিক সহযোগিতায়
                        </div>
                        <div>বাগেরহাট জেলায় কর্মরত এনজিও সমূহ</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-copyright text-center">
                        <div>
                            Design & Development by
                        </div>

                        <div class="d-flex justify-content-center mt-2">
                            <style>
                                .d-flex a img {
                                    height: 13px;
                                }

                            </style>
                            <a href="http://technosoft.com.bd/" target="_blank" class="text-center"><img
                                    src="http://technosoft.com.bd/storage/about/logo-2020-07-22-5f18279557f24.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------End Footer Section-------------------------->
    <script src="{{ asset('js/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('js/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/frontend/js/min.js') }}"></script>
    {{-- modal image --}}
    <script type="text/javascript">
        function getImage(obj, admin) {
            var loc = obj.parentElement.parentElement.nextElementSibling.firstElementChild;
            var imageName = loc.getAttribute("src");
            document.getElementById('admin-modal-image').setAttribute('src', imageName);
            document.getElementById('admin_name').innerHTML = admin.name;
            document.getElementById('admin_title').innerHTML = admin.title;
            document.getElementById('admin_designatiom').innerHTML = admin.designation;
            document.getElementById('admin_message').innerHTML = admin.message;
            document.getElementById('admin_join_date').innerHTML = admin.join_date;
            document.getElementById('admin_phone').innerHTML = admin.phone;
            document.getElementById('admin_email').innerHTML = admin.email;
        }
    </script>
    @stack('js')

</body>

</html>
