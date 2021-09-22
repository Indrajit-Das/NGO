@extends('frontend.main-site.layout.master')
@section('title','Exe.-Committee-')

@section('main-content')
    <div class="col-sm-9 ">
        <div class="card mt-2">
            <div class="card-header">
                <div class="widget widget-search">
                    <form role="search" method="get" class="search-form" action="#" id="serachForm" onsubmit="return false;">
                        <input type="search" class="form-control" placeholder="Search name here..." name="search"  id="myInput">
                        <button type="submit" class="search-submit" title="Search" id="submitBtn">
                            <i class="icon-search fa fa-search"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="admin-date text-center card py-2">
                    <div>জেলা এনজিও কাযক্রম পরিবীক্ষন ও সমন্বয় সম্পর্কিত সভার কাযকরী কমিটির সদস্যদের তালিকা</div>
                </div>
                <!-----------------------Table----------------------->
                <table class="table table-bordered table-all mt-3">
                    <thead>
                        <tr>
                            <th scope="col">ক্রমিক নং</th>
                            <th scope="col">
                                <name>নাম</name>
                            </th>
                            <th scope="col">
                                <name>প্রতিষ্ঠানের নাম</name>
                            </th>
                            <th scope="col">
                                <name>কমিটিতে পদবী</name>
                            </th>
                            <th scope="col">
                                <name>যোগাযোগ নম্বর</name>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ngoComs as $key=>$ngoCom)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $ngoCom->name }}</td>
                            <td>{{ $ngoCom->organization }}</td>
                            <td>{{ $ngoCom->title_in_committee }}</td>
                            <td>{{ $ngoCom->phone }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--------------------------End Table------------------------>
            </div>
            <div class="card-footer">
                <div class="float-right mb-0">
                    {{ $ngoComs->links() }}
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
                <div class="modal-content modaldialog">
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
            $("tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    </script>
@endpush
