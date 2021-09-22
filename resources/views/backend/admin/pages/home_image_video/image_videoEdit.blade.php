@extends('backend.admin.layout.master')
@section('title','image/video-edit')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header">
           <div class="row">
                 <div class="col-sm-4" style="margin-top:12px;">
                <a href="{{ URL::to('/image-video') }}"><i class="fa fa-reply fa-lg edit" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4>Image / Video Edit</h4>
            </div>
           </div>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/image-video/'.$image_video->id ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="source">Source Link :<span class="ml-3" id="source"><b style="color: red">@error('source')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $image_video->src }}" id="source" placeholder="Enter source link" name="source">
                </div>
                <div class="form-group">
                    <label for="select_type">Select Type :<span class="ml-3" id="select_type"><b style="color: red">@error('select_type')*{{ $message }}@enderror</b></span></label>
                    <select name="select_type" class="form-control">
                        <option value="">-- Select One --</option>
                        @if($image_video->ofType=='image')
                            <option value="image" selected>image</option>
                            <option value="video">video</option>
                        @elseif($image_video->ofType=='video')
                            <option value="image">image</option>
                            <option value="video" selected>video</option>
                        @endif
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
