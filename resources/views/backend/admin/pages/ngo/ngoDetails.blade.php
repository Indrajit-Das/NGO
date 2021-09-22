@extends('backend.admin.layout.master')
@section('title','ngo-entry')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-4" style="margin-top:12px;">
                    <a href="{{ URL::to('/ngo') }}"><i class="fa fa-reply fa-lg edit" aria-hidden="true"></i></a>
                </div>
                <div class="col-sm-8">
                    <h4 class="ml-5">Ngo Details- {{ $ngo->english_name }}</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td>logo</td>
                            <td><img src="{{ asset('storage/ngo_logo/'.$ngo->logo) }}" style="height: 60px;width:100px" ></td>
                        </tr>
                        <tr>
                            <td>Bangla Name</td>
                            <td>{{ $ngo->bangla_name }}</td>
                        </tr>
                        <tr>
                            <td>English Name</td>
                            <td>{{ $ngo->english_name }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $ngo->phone }}</td>
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td>{{ $ngo->telephone }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $ngo->email }}</td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td>{{ $ngo->fax }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{ $ngo->address }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
