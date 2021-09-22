@extends('backend.admin.layout.master')
@section('title','service-category')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header text-center">
            <h4>Service Category Entry</h4>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/services/category') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="order_no">Order No:<span class="ml-3" id="order_no"><b style="color: red">@error('order_no')*{{ $message }}@enderror</b></span></label>
                    <input type="number" class="form-control" value="{{ old('order_no') }}" id="order_no" placeholder="Enter Service Category Order_no" name="order_no">
                </div>
                <div class="form-group">
                    <label for="category">Service Category Name:<span class="ml-3" id="category_error"><b style="color: red">@error('category')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('category') }}" id="category" placeholder="Enter Service Category Name" name="category">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
