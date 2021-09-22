@extends('backend.admin.layout.master')
@section('title','edit-service')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header">
           <div class="row">
            <div class="col-sm-4" style="margin-top:12px;">
                <a href="{{ URL::to('/service') }}"><i class="fa fa-reply fa-lg edit" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4 class="ml-5">Service Edit</h4>
            </div>
           </div>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/service/'. $data->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="order_no">Order No:<span class="ml-3" id="order_no"><b style="color: red">@error('order_no')*{{ $message }}@enderror</b></span></label>
                    <input type="number" class="form-control" value="{{ $data->order_no }}" id="order_no" placeholder="Enter Service Category Order_no" name="order_no">
                </div>
                <div class="form-group">
                    <label for="category">Service Category:<span class="ml-3" id="category"><b style="color: red">@error('categoryId')*{{ $message }}@enderror</b></span></label>
                    <select class="form-control" name="categoryId" >
                        @foreach($category as $cat)
                            @if (old('category') == $cat->id)
                                <option value="{{ $cat->id }}" selected>{{ $cat->title }}</option>
                            @elseif($cat->id == $data->service_table_id)
                                <option value="{{ $cat->id }}" selected>{{ $cat->title }}</option>
                            @else
                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                            @endif
                        @endforeach
                    </select>
                    {{-- <input type="text" class="form-control" value="{{ old('order_no') }}" id="order_no" placeholder="Enter Service Category Order_no" name="order_no"> --}}
                </div>
                <div class="form-group">
                    <label for="title">Service Name:<span class="ml-3" id="title"><b style="color: red">@error('title')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control"  id="title" name="title" placeholder="Enter Service Name" value="{{ $data->title }}" >
                </div>
                <div class="form-group">
                    <label for="link">Link :<span class="ml-3" id="link_error"><b style="color: red">@error('link')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $data->link }}" id="link" placeholder="Enter Service associated link" name="link">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    </div>
@endsection
