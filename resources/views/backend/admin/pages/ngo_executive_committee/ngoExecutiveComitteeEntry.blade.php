@extends('backend.admin.layout.master')
@section('title','exe-committee-entry')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header text-center">
            <h4>NGO Executive Committee</h4>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/ngo/committee') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">Name:<span class="ml-3" id="name"><b style="color: red">@error('name')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('name') }}" id="name" placeholder="Enter your name" name="name">
                </div>
                <div class="form-group">
                    <label for="organization_name">Organization Name:<span class="ml-3" id="organization_name"><b style="color: red">@error('organization_name')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('organization_name') }}" id="organization_name" placeholder="Enter organization name" name="organization_name">
                </div>
                <div class="form-group">
                    <label for="committee_title">Title in committee:<span class="ml-3" id="committee_title"><b style="color: red">@error('committee_title')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('committee_title') }}" id="committee_title" placeholder="Enter title in committee" name="committee_title">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:<span class="ml-3" id="phone"><b style="color: red">@error('phone')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('phone') }}" id="phone" placeholder="Enter phone number" name="phone">
                </div>
                <div class="form-group">
                    <label for="email">Email:<span class="ml-3" id="email"><b style="color: red">@error('email')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('email') }}" id="email" placeholder="Enter Email " name="email">
                </div>
                <div class="form-group">
                    <label for="order_no">Order No:<span class="ml-3" id="order_no"><b style="color: red">@error('order_no')*{{ $message }}@enderror</b></span></label>
                    <input type="number" class="form-control" value="{{ old('order_no') }}" id="order_no" placeholder="Enter order_no" name="order_no">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
