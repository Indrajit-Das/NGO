@extends('frontend.main-site.layout.master')
@section('title','List-Ngo-')

@section('main-content')
<div class="col-sm-9">
    <div class="card mt-2">
        <div class="card-header">
            <div class="widget widget-search">
                <form role="search" method="get" class="search-form" action="#">
                    <input type="search" class="form-control" placeholder="Search posts here..." name="s" id="myInput">
                    <button type="submit" class="search-submit" title="Search">
                        <i class="icon-search fa fa-search"></i>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
        </div>
        <div class="card-body cardbody" style="padding: 7px 35px;">
            <div class="admin-date admindate shadow-lg">
                <h3 class="title py-2 text-center text-white">জেলা এনজিও তালিকা</h3>
            </div>
            <!-- Media top -->
            @foreach ($ngos as $ngo)
            <a href="{{ URL::to($ngo->slug.'/details') }}" class="text-decoration-none">
                <div class="media mt-3 border p-3 ngo-search-class">
                    <img src="{{ asset('storage/ngo_logo/'.$ngo->logo) }}" class="align-self-start mr-3">
                    <div class="media-body mt-2 media-body-hover" style="position:relative">
                        <h4 id="ngoName">{{ $ngo->english_name }} , {{ $ngo->bangla_name }}</h4>
                        <p class="ngo-list">{{ $ngo->address }},{{ $ngo->telephone }},{{ $ngo->fax }},{{ $ngo->email }}
                        </p>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
        <div class="card-footer">
            <div class="float-right mb-0">
                {{ $ngos->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

@section('admin-content')
<div class="col-sm-3">
    @if ($admins)
    @foreach ($admins as $admin)
    <div class="card card-two position-mt mt-2">
        <div class="card-header">
            <div class="all-title">
                {{-- <h2>জেলা প্রশাসক</h2> --}}
                <h2>{{ $admin->title }}</h2>
            </div>
        </div>
        <style>

        </style>
        <div class="card-body cardbody">
            <div class="overlay">
                <div class="textt">
                    <!--বার্তা-->
                    <button class="btn  mt-2 px-3 modal-btn" data-toggle="modal" data-target="#myModal"
                        onclick="getImage(this,{{ $admin }})" id="detailBtn">Details</button>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('storage/administrator_image/' . $admin->image) }}" class="card-img-top cardimgtop">

                <h3 class="text-center">{{ $admin->name }}</h3>
                <div class="text-center card-text mb-2"><a
                        href="{{ URL::to('administrator/message/'.$admin->id) }}">বার্তা</a></div>
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
<script type="text/javascript">
    $("#myInput").on("keyup", function() {
            document.querySelector('form').addEventListener('click',function(event){
            event.preventDefault();
        });
        var value = $(this).val().toLowerCase();
        $("a div").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
</script>
@endpush
