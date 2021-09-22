@extends('backend.admin.layout.master')
@section('title','edit-notice')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
            <div class="card-header">
               <div class="row">
                     <div class="col-sm-4" style="margin-top:10px;">
                    <a href="{{ URL::to('/notice/manage') }}"><i class="fa fa-reply fa-lg" aria-hidden="true"></i></a>
                </div>
                <div class="col-sm-8">
                    <h4 class="ml-5">Notice Edit</h4>
                </div>
               </div>
            </div>
        <div class="card-body">
            <form action="{{ URL::to('/notice/'.$notice->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title:<span class="ml-3" id="title_error"><b style="color: red">@error('title')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $notice->title }}" id="title" placeholder="Enter notice Title" name="title">
                </div>
                <div class="form-group">
                    <label for="notice">Notice :<span class="ml-3" id="notice_error"><b style="color: red">@error('notice')*{{ $message }}@enderror</b></span></label>
                    <textarea class="form-control" rows="5" id="notice" name="notice" placeholder="Enter Full Notice">{{$notice->notice }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    </div>
@endsection
