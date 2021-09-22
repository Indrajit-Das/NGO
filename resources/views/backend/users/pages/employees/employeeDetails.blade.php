@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-employee-details')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-1">
                    <a href="{{ URL::to('/user/employee') }}"><i class="fa fa-reply fa-lg" aria-hidden="true"></i></a>
                </div>
                <div class="col-sm-11 text-center">
                    <h4>Employee Details - {{ $employee->name }}</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td>Photo</td>
                            <td><img src="{{ asset('storage/employee_image/'.$employee->photo) }}" style="height: 60px;width:100px" ></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ $employee->name }}</td>
                        </tr>
                        <tr>
                            <td>Designation</td>
                            <td>{{ $employee->designation }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $employee->phone }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $employee->email }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
