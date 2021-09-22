@extends('backend.admin.layout.master')
@section('title','notice')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header text-center">
            <h4>Notice Entry</h4>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/notice') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title:<span class="ml-3" id="title_error"><b style="color: red">@error('title')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('title') }}" id="title" placeholder="Enter notice Title" name="title">
                </div>
                <div class="form-group">
                    <label for="notice">Notice :<span class="ml-3" id="notice_error"><b style="color: red">@error('notice')*{{ $message }}@enderror</b></span></label>
                    <textarea class="form-control" rows="5" id="notice" name="notice" placeholder="Enter Full Notice"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
