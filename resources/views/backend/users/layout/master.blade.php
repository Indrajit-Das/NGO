<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="{{ asset('storage/ngo_logo/'.Auth::user()->ngo->logo) }}" sizes="16x16">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/backend/dashboard/main.css') }}>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
      <a class="app-header__logo"  href="{{ URL::to('user/dashboard') }}">{{ Auth::user()->name }}</a>
      <!-- Sidebar toggle button-->
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
            <!-- User Menu-->
            <li class="dropdown">
                <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications">
                    <i class="fa fa-bell-o fa-lg"><span class="badge badge-light badge-light-custom" id="notice_count">0</span></i>
                </a>
                <style>
                    .badge-light-custom{
                        position: relative;
                        bottom: 13px;
                        border-radius: 50%;
                        font-size: 14px;
                    }
                </style>
                <ul class="app-notification dropdown-menu dropdown-menu-right" >
                    <li class="app-notification__title">You have <span id="notice_number"></span> new notifications.</li>
                    <div class="app-notification__content" id="notice_list">

                    </div>
                </ul>
            </li>
            <li class="app-nav__item"><b >{{ Auth::user()->name }}</b></li>
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li>
                        <x-jet-dropdown-link href="{{ route('user.profile.show') }}">
                            <i class="fa fa-user fa-lg"></i> {{ __('Profile') }}
                        </x-jet-dropdown-link>
                    </li>
                    <li>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                <i class="fa fa-sign-out fa-lg"></i> {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <ul class="app-menu">
        <li><a class="app-menu__item {{ request()->is('user/dashboard')?' active':'' }}" href="{{ URL::to('user/dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item {{ request()->segment(2)==='ngo-info'?' active':'' }}" href="{{ URL::to('user/ngo-info/'.Auth::user()->ngo->id) }}"><i class="app-menu__icon fa fa-star-half-o" aria-hidden="true"></i><span class="app-menu__label">NGO Info</span></a></li>
        @if(Auth::user()->ngo->status==='active')

        <li><a class="app-menu__item {{ request()->is('user/missions')?' active':'' }}" href="{{ URL::to('user/missions') }}"><i class="app-menu__icon fa fa-bolt" aria-hidden="true"></i><span class="app-menu__label">Our Mission</span></a></li>
        <li><a class="app-menu__item {{ request()->is('user/visions')?' active':'' }}" href="{{ URL::to('/user/visions') }}"><i class="app-menu__icon fa fa-history" aria-hidden="true"></i><span class="app-menu__label">Our Vision</span></a></li>
        <li><a class="app-menu__item {{ request()->is('user/abouts')?' active':'' }}" href="{{ URL::to('user/abouts') }}"><i class="app-menu__icon fa fa-magnet" aria-hidden="true"></i><span class="app-menu__label">About Us</span></a></li>
        <li><a class="app-menu__item {{ request()->is('user/all-notice/seen/all')?' active':'' }}" href="{{ URL::to('user/all-notice/seen/all') }}"><i class="app-menu__icon fa fa-envelope-open-o" aria-hidden="true"></i><span class="app-menu__label">All Notifications</span></a></li>
        <li class="treeview"><a class="app-menu__item {{ request()->segment(2)=='scehduled-activity'?' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-linode fa-lg"></i><span class="app-menu__label">Scheduled Activity</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('user/scehduled-activity/create')?' active':'' }}" href="{{ URL::to('/user/scehduled-activity/create') }}"><i class="icon fa fa-circle-o"></i>Activity Entry</a></li>
            <li><a class="treeview-item {{ request()->is('/user/scehduled-activity')?' active':'' }}" href="{{ URL::to('/user/scehduled-activity') }}"><i class="icon fa fa-circle-o"></i>Activity List</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->segment(2)=='employee'?' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-superpowers"></i><span class="app-menu__label">Employee's</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('user/employee/create')?' active':'' }}" href="{{ URL::to('/user/employee/create') }}"><i class="icon fa fa-circle-o"></i>Employee Entry</a></li>
            <li><a class="treeview-item {{ request()->is('user/employee')?' active':'' }}" href="{{ URL::to('/user/employee') }}"><i class="icon fa fa-circle-o"></i>Employee List</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->segment(2)=='officer'?' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-superpowers"></i><span class="app-menu__label">Officer's</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('user/officer/create')?' active':'' }}" href="{{ URL::to('/user/officer/create') }}"><i class="icon fa fa-circle-o"></i>Officer Entry</a></li>
            <li><a class="treeview-item {{ request()->is('user/officer')?' active':'' }}" href="{{ URL::to('/user/officer') }}"><i class="icon fa fa-circle-o"></i>Officer's List</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->segment(2)=='project'?' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-superpowers"></i><span class="app-menu__label">Ngo Project's</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('user/project/create')?' active':'' }}" href="{{ URL::to('/user/project/create') }}"><i class="icon fa fa-circle-o"></i>Project Entry</a></li>
            <li><a class="treeview-item {{ request()->is('user/project')?' active':'' }}" href="{{ URL::to('/user/project') }}"><i class="icon fa fa-circle-o"></i>Project List</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->segment(2)=='photo-gallery'?' active':'' }}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-image-o" aria-hidden="true"></i><span class="app-menu__label">Photo Gallery</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('user/photo-gallery/create')?' active':'' }}" href="{{ URL::to('/user/photo-gallery/create') }}"><i class="icon fa fa-circle-o"></i>Photo Entry</a></li>
            <li><a class="treeview-item {{ request()->is('user/photo-gallery')?' active':'' }}" href="{{ URL::to('/user/photo-gallery') }}"><i class="icon fa fa-circle-o"></i>Manage Photo Gallery </a></li>
          </ul>
        </li>
        @endif
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
    <!-- Page specific javascripts-->
    @stack('js')
    <script type="text/javascript">
     // for the notification
        $(function(){
            // for getting and setting the notice
            function notice(){
                // alert('hey');
                $.ajax({
                    url: "{{ route('unseen') }}",
                    success: function(result){
                        $('#notice_list').html(result.notification);
                        $('#notice_number').html(result.count);
                        $('#notice_count').html(result.count);
                    }
                });
                setInterval(function(){
                    $.ajax({
                        url: "{{ route('unseen') }}",
                        success: function(result){
                            $('#notice_list').html(result.notification);
                            $('#notice_number').html(result.count);
                            $('#notice_count').html(result.count);
                        }
                    });
                },10000);
            }
            notice();
        });
    </script>

    {{-- for notify --}}
    {{-- for sweet alert --}}
    @include('sweetalert::alert')

  </body>
</html>
