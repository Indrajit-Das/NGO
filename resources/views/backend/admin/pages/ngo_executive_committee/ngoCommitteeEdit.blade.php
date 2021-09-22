@extends('backend.admin.layout.master')
@section('title','exe-committee-edit')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col-sm-4" style="margin-top:10px;">
                <a href="{{ URL::to('/ngo/committee') }}"><i class="fa fa-reply fa-lg edit" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4>NGO Executive Committee Edit</h4>
            </div>
           </div>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/ngo/committee/'.$ngoCom->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name:<span class="ml-3" id="name"><b style="color: red">@error('name')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $ngoCom->name }}" id="name" placeholder="Enter your name" name="name">
                </div>
                <div class="form-group">
                    <label for="organization_name">Organization Name:<span class="ml-3" id="organization_name"><b style="color: red">@error('organization_name')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $ngoCom->organization }}" id="organization_name" placeholder="Enter organization name" name="organization_name">
                </div>
                <div class="form-group">
                    <label for="committee_title">Title in committee:<span class="ml-3" id="committee_title"><b style="color: red">@error('committee_title')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $ngoCom->title_in_committee }}" id="committee_title" placeholder="Enter title in committee" name="committee_title">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:<span class="ml-3" id="phone"><b style="color: red">@error('phone')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $ngoCom->phone }}" id="phone" placeholder="Enter phone number" name="phone">
                </div>
                <div class="form-group">
                    <label for="email">Email:<span class="ml-3" id="email"><b style="color: red">@error('email')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $ngoCom->email }}" id="email" placeholder="Enter Email " name="email">
                </div>
                <div class="form-group">
                    <label for="order_no">Order no:<span class="ml-3" id="order_no"><b style="color: red">@error('order_no')*{{ $message }}@enderror</b></span></label>
                    <input type="number" class="form-control" value="{{ $ngoCom->order_no }}" id="name" placeholder="Enter order_no" name="order_no">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
