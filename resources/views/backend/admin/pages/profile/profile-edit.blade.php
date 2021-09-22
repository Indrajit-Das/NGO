<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ngo Portal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href={{ asset('css/frontend/css/bootstrap.min.css') }}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <style>
            .topbaar {
                background-color: cadetblue;
            }

            .text-left a {
                color: white;
                text-decoration: none;
                margin-left: 30px;
            }

            .dropdown-toggle {
                color: black;
                text-decoration: none;
                background-color: white;
                padding: 1px 13px 1px 13px
            }
        </style>
        <div class="allheader">
            <div class="topbaar p-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="left-site">
                                <div class="logo d-inline">
                                    @if(Auth::user()->role==='admin')
                                        <img src="{{ asset('storage/admin/'.Auth::user()->image)}}" class="rounded-circle" style="width:60px; height:60px">
                                    @else
                                        <img src="{{ asset('storage/ngo_logo/'.Auth::user()->ngo->logo) }}" class="rounded-circle" style="width:60px; height:60px">
                                    @endif
                                </div>
                                <div class="text-left d-inline">
                                    @if(Auth::user()->role==='admin')
                                        <a href="{{ URL::to('admin/dashboard') }}">Dashboard</a>
                                    @else
                                        <a href="{{ URL::to('user/dashboard') }}">Dashboard</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="dropdown dropd mt-3 d-flex justify-content-end">
                                <span class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->email }}</span>
                                <div class="dropdown-menu">
                                    <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            <i class="fa fa-sign-out mr-2" aria-hidden="true"></i>log out
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow-lg py-3">
                <style>
                    .profile a {
                        color: black;
                        text-decoration: none;
                        margin-left: 8px;
                    }
                </style>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <div class="profile">
                                    <a href="#">Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-body mt-5">
            <style>
                .nav-tabs .nav-item.show .nav-link,
                .nav-tabs .nav-link.active {
                    color: #495057;
                    background-color: #fff;
                    border-color: red #dee2e6 #fff;
                }

                .nav-item [class^="nav"] {
                    color: black;
                    font-size: calc(6px + 9px);
                    font-weight: normal;
                }

                .nav>li>a:focus,
                .nav>li>a:hover {
                    text-decoration: none;
                    background-color: #5095af;
                }
            </style>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabss">
                            <li class="nav-item item">
                                <a class="nav-link link active" data-toggle="tab" href="#personal-info">Personal Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#password-info">Change Password</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active container mt-4" id="personal-info">
                                @if(Auth::user()->role==='admin')
                                <form action="{{ URL::to('/admin/profile/personal-info') }}" method="post" enctype="multipart/form-data">
                                @else
                                <form action="{{ URL::to('/user/profile/personal-info') }}" method="post" enctype="multipart/form-data">
                                @endif
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="english_name">Name :<span class="ml-3" id="english_name"><b style="color: red">@error('english_name')*{{ $message }}@enderror</b></span></label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" id="english_name" placeholder="Enter Name" name="english_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email :<span class="ml-3" id="email"><b style="color: red">@error('email')*{{ $message }}@enderror</b></span></label>
                                        <input type="email" class="form-control"  id="email" value="{{ Auth::user()->email }}" name="email" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone :<span class="ml-3" id="phone"><b style="color: red">@error('phone')*{{ $message }}@enderror</b></span></label>
                                        <input class="form-control" type="text" id="phone" name="phone" value="{{ Auth::user()->phone }}" placeholder="Enter Phone No.">
                                    </div>
                                    @if (Auth::user()->role ==='admin')
                                        <div class="form-group">
                                            <style>
                                                .formcontrol-image-input {
                                                    height: calc(30px + .75rem + 1px);
                                                }
                                            </style>
                                            <label for="image">Image :<span class="ml-3" id="image"><b style="color: red">@error('image')*{{ $message }}@enderror</b></span></label>
                                                <div class="preview-img" id="preview-edit">
                                                    <style>
                                                        .preview-img img{
                                                            width: 150px;
                                                            height: 120px;
                                                            object-fit: cover;
                                                        }
                                                    </style>
                                                    <img src="{{ asset('storage/admin/'.Auth::user()->image) }}" id="galleryPhotoPreview"/>
                                                </div>
                                            <input class="form-control formcontrol-image-input mt-2" type="file" id="image" name="image" onchange="preview_image_edit(event)">
                                        </div>
                                    @endif
                                    <button type="submit" class="btn btn-info mt-3">Save</button>
                                </form>
                            </div>
                            <div class="tab-pane container mt-4" id="password-info">
                                @if(Auth::user()->role=='admin')
                                <form action="{{ URL::to('/admin/profile/update-password') }}" method="post">
                                @else
                                <form action="{{ URL::to('/user/profile/update-password') }}" method="post">
                                @endif
                                    @csrf
                                    @method('PUT')

                                    @if($errors->any())
                                        <span  id="phone" style="color: red">
                                            Enter Correct Password !
                                        </span>
                                    @endif
                                    @if(session('wrong'))
                                        <span style="color: red">
                                            {{ session('wrong') }}
                                        </span>
                                    @endif
                                    <div class="form-group">
                                        <label for="current_password">Current Password :</label>
                                        <input type="password" class="form-control"  id="current_password" placeholder="Enter Current Password" name="current_password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">New Password :</label>
                                        <input type="password" class="form-control"  id="password" name="password" placeholder="Enter New Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password :</label>
                                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                    <button type="submit" class="btn btn-info mt-3">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </section>
        <script src={{ asset('js/backend/dashboard/jquery-3.3.1.min.js') }}></script>
        <script src={{ asset('js/app.js') }}></script>
        <script type="text/javascript">
            function preview_image_edit(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById("galleryPhotoPreview");
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
        </script>
    </body>
</html>
