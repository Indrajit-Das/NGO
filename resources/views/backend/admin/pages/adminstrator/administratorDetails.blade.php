@extends('backend.admin.layout.master')
@section('title')
    administrator-details
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-2" style="margin-top:7px;">
                    <a href="{{ URL::to('/administrator') }}"><i class="fa fa-reply fa-lg" aria-hidden="true"></i></a>
                </div>
                <div class="col-sm-10 text-center">
                    <h4>administrator Details- {{ $administrator->name }}</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td>Photo</td>
                            <td><img src="{{ asset('storage/administrator_image/'.$administrator->image) }}" style="height: 60px;width:100px" ></td>
                        </tr>
                        <tr>
                            <td>Order No.</td>
                            <td>{{ $administrator->order_no }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ $administrator->name }}</td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>{{ $administrator->title }}</td>
                        </tr>
                        <tr>
                            <td>Designation</td>
                            <td>{{ $administrator->designation }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $administrator->email }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $administrator->phone }}</td>
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td>{{ $administrator->telephone }}</td>
                        </tr>
                        <tr>
                            <td>Join Date</td>
                            <td>{{ $administrator->join_date }}</td>
                        </tr>
                        <tr>
                            <td>Leave Date</td>
                            <td>{{ $administrator->leave_date }}</td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td>{{ $administrator->message }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
