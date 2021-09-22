@extends('backend.admin.layout.master')
@section('title','service-entry')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header text-center">
            <h4>Service Entry</h4>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/service') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="order_no">Order No:<span class="ml-3" id="order_no"><b style="color: red">@error('order_no')*{{ $message }}@enderror</b></span></label>
                    <input type="number" class="form-control" value="{{ old('order_no') }}" id="order_no" placeholder="Enter Service Category Order_no" name="order_no">
                </div>
                <div class="form-group">
                    <label for="category">Service Category:<span class="ml-3" id="category"><b style="color: red">@error('categoryId')*{{ $message }}@enderror</b></span></label>
                    <select class="form-control" name="categoryId">
                        <option value="">-- Select one category--</option>
                        @foreach($category as $cat)
                            @if (old('category') == $cat->id)
                                <option value="{{ $cat->id }}" selected>{{ $cat->title }}</option>
                            @else
                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                            @endif
                        @endforeach
                    </select>
                    {{-- <input type="text" class="form-control" value="{{ old('order_no') }}" id="order_no" placeholder="Enter Service Category Order_no" name="order_no"> --}}
                </div>
                <div class="form-group">
                    <label for="title">Service Name:<span class="ml-3" id="title_error"><b style="color: red">@error('title')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('title') }}" id="title" placeholder="Enter Service Name" name="title">
                </div>
                <div class="form-group">
                    <label for="link">Link :<span class="ml-3" id="link_error"><b style="color: red">@error('link')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('link') }}" id="link" placeholder="Enter Service associated link" name="link">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
