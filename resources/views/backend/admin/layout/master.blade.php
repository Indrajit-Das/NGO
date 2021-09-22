<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('storage/admin/'.Auth::user()->image) }}" sizes="16x16">
    <title>NGO- @yield('title')</title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/backend/dashboard/main.css') }}>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
      <a class="app-header__logo" href="{{ URL::to('admin/dashboard') }}">{{ Auth::user()->name }}</a>
      <!-- Sidebar toggle button-->
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <x-navigation_backend />
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <ul class="app-menu">
        <li><a class="app-menu__item {{ request()->is('admin/dashboard')?' active':'' }}" href="{{ route('admin/dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item {{ request()->is('admin/frontend/setting') ? ' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-heart"></i><span class="app-menu__label">Frontend Logo/Name</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('admin/frontend/setting')?' active':'' }}" href="{{ URL::to('/admin/frontend/setting/') }}"><i class="icon fa fa-circle-o"></i>Update Logo/Name</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->segment(1)=='administrator'?' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-superpowers"></i><span class="app-menu__label">Administrator's</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('administrator/create')?' active':'' }}" href="{{ URL::to('/administrator/create') }}"><i class="icon fa fa-circle-o"></i>Administrator Entry</a></li>
            <li><a class="treeview-item {{ request()->is('administrator')?' active':'' }}" href="{{ URL::to('/administrator') }}"><i class="icon fa fa-circle-o"></i>Administrator List</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->segment(1)=='image-video'?' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-video-o"></i><span class="app-menu__label">Home-Image/Video</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('image-video/create')?' active':'' }}" href="{{ URL::to('/image-video/create') }}"><i class="icon fa fa-circle-o"></i>Image/Video entry</a></li>
            <li><a class="treeview-item {{ request()->is('image-video')?' active':'' }}" href="{{ URL::to('/image-video') }}"><i class="icon fa fa-circle-o"></i>Image/Video List</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->segment(1)=='notice'?' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-envelope-open"></i><span class="app-menu__label">Notice</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('notice/create')?' active':'' }}" href="{{ URL::to('/notice/create') }}"><i class="icon fa fa-circle-o"></i>Notice Entry</a></li>
            <li><a class="treeview-item {{ request()->is('notice')?' active':'' }}" href="{{ URL::to('/notice') }}"><i class="icon fa fa-circle-o"></i>All Notices</a></li>
            <li><a class="treeview-item {{ request()->is('notice/manage')?' active':'' }}" href="{{ URL::to('/notice/manage') }}"><i class="icon fa fa-circle-o"></i> Manage Notices</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item {{ request()->segment(1)=='services'||request()->segment(1)=='service'?' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-handshake-o" aria-hidden="true"></i><span class="app-menu__label">Service</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('services/category/create')?' active':'' }}" href="{{ URL::to('/services/category/create') }}"><i class="icon fa fa-circle-o"></i>Service Category Entry</a></li>
            <li><a class="treeview-item {{ request()->is('services/category')?' active':'' }}" href="{{ URL::to('/services/category') }}"><i class="icon fa fa-circle-o"></i>Service Category Manage</a></li>
            <li><a class="treeview-item {{ request()->is('service/create')?' active':'' }}" href="{{ URL::to('/service/create') }}"><i class="icon fa fa-circle-o"></i>Service Entry</a></li>
            <li><a class="treeview-item {{ request()->is('service')?' active':'' }}" href="{{ URL::to('/service') }}"><i class="icon fa fa-circle-o"></i>Manage Service</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->segment(1)=='ngo' ?request()->segment(2)=='committee'?' active':'':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users" aria-hidden="true"></i><span class="app-menu__label">NGO Exe. Committee</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('ngo/committee/create')?' active':'' }}" href="{{ URL::to('/ngo/committee/create') }}"><i class="icon fa fa-circle-o"></i>NGO Committee Entry</a></li>
            <li><a class="treeview-item {{ request()->is('ngo/committee')?' active':'' }}" href="{{ URL::to('/ngo/committee') }}"><i class="icon fa fa-circle-o"></i>Ngo Com. Manage</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->segment(1)=='slider-image' ? ' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-image-o" aria-hidden="true"></i><span class="app-menu__label">Slider Image</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('slider-image/create') ?' active':'' }}" href="{{ URL::to('/slider-image/create') }}"><i class="icon fa fa-circle-o"></i>Image Entry</a></li>
            <li><a class="treeview-item {{ request()->is('slider-image') ? ' active':'' }}" href="{{ URL::to('/slider-image') }}"><i class="icon fa fa-circle-o"></i>Manage Slider Image </a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->segment(1)=='photo-gallery'?' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-image-o" aria-hidden="true"></i><span class="app-menu__label">Photo Gallery</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('photo-gallery/create')?' active':'' }}" href="{{ URL::to('/photo-gallery/create') }}"><i class="icon fa fa-circle-o"></i>Photo Entry</a></li>
            <li><a class="treeview-item {{ request()->is('photo-gallery')?' active':'' }}" href="{{ URL::to('/photo-gallery') }}"><i class="icon fa fa-circle-o"></i>Manage Photo Gallery </a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->is('ngo/create')||request()->is('ngo')?' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-building" aria-hidden="true"></i><span class="app-menu__label">NGO</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('ngo/create')?' active':'' }}" href="{{ URL::to('/ngo/create') }}"><i class="icon fa fa-circle-o"></i>Ngo Entry</a></li>
            <li><a class="treeview-item {{ request()->is('ngo')?' active':'' }}" href="{{ URL::to('/ngo') }}"><i class="icon fa fa-circle-o"></i>List of Ngo's </a></li>
          </ul>
        </li>

        <li><a class="app-menu__item {{ request()->segment(2)=='scheduled-activity' ? ' active':'' }}" href="{{ URL::to('/ngo/scheduled-activity/list') }}"><i class="app-menu__icon fa fa-certificate" aria-hidden="true"></i><span class="app-menu__label">NGO-Activities</span></a></li>
        <li><a class="app-menu__item {{ request()->is('our-responsibility')?' active':'' }}" href="{{ URL::to('/our-responsibility') }}"><i class="app-menu__icon fa fa-star-half-o" aria-hidden="true"></i><span class="app-menu__label">Our Responsibility</span></a></li>
        <li><a class="app-menu__item {{ request()->is('our-mission')?' active':'' }}" href="{{ URL::to('/our-mission') }}"><i class="app-menu__icon fa fa-bolt" aria-hidden="true"></i><span class="app-menu__label">Our Mission</span></a></li>
        <li><a class="app-menu__item {{ request()->is('our-history')?' active':'' }}" href="{{ URL::to('/our-history') }}"><i class="app-menu__icon fa fa-history" aria-hidden="true"></i><span class="app-menu__label">Our History</span></a></li>
        <li><a class="app-menu__item {{ request()->is('about-us')?' active':'' }}" href="{{ URL::to('/about-us') }}"><i class="app-menu__icon fa fa-magnet" aria-hidden="true"></i><span class="app-menu__label">About Us</span></a></li>
        <li><a class="app-menu__item {{ request()->is('contact')?' active':'' }}" href="{{ URL::to('/contact') }}"><i class="app-menu__icon fa fa-address-book-o" aria-hidden="true"></i><span class="app-menu__label">Contact</span></a></li>

      </ul>
    </aside>
    <main class="app-content">
      @section('content')
      @show
    </main>
    <!-- Essential javascripts for application to work-->
    <script src={{ asset('js/backend/dashboard/jquery-3.3.1.min.js') }}></script>
    <script src={{ asset('js/backend/dashboard/popper.min.js') }}></script>
    <script src={{ asset('js/app.js') }}></script>
    <script src={{ asset("js/backend/dashboard/main.js") }}></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src={{ asset('js/backend/dashboard/plugins/pace.min.js') }}></script>
    @stack('js')
    {{-- for notify --}}
    {{-- for sweet alert --}}
    @include('sweetalert::alert')

  </body>
</html>
