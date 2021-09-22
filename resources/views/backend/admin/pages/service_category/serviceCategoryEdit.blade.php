@extends('backend.admin.layout.master')
@section('title','edit-service-category')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header">
           <div class="row">
              <div class="col-sm-4" style="margin-top:10px;">
                <a href="{{ URL::to('/services/category') }}"><i class="fa fa-reply fa-lg edit" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4>Service Category Edit</h4>
            </div>
           </div>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/services/category/'.$serviceCategory->id ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="order_no">Order No:<span class="ml-3" id="order_no"><b style="color: red">@error('order_no')*{{ $message }}@enderror</b></span></label>
                    <input type="number" class="form-control" value="{{ $serviceCategory->order_no }}" id="order_no" placeholder="Enter Service Category Order_no" name="order_no">
                </div>
                <div class="form-group">
                    <label for="category">Service Category:<span class="ml-3" id="category_error"><b style="color: red">@error('category')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control"  id="category" name="category" placeholder="Enter Full Notice" value="{{ $serviceCategory->title }}" >
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    </div>
@endsection
