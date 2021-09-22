@extends('backend.admin.layout.master')
@section('title','image/video-entry')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header text-center">
            <h4>Image / Video Entry</h4>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/image-video') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="source">Source Link :<span class="ml-3" id="source"><b style="color: red">@error('source')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('source') }}" id="source" placeholder="Enter source link" name="source">
                </div>
                <div class="form-group">
                    <label for="select_type">Select Type :<span class="ml-3" id="select_type"><b style="color: red">@error('select_type')*{{ $message }}@enderror</b></span></label>
                    <select name="select_type" class="form-control">
                        <option value="">-- Select One --</option>
                        <option value="image">image</option>
                        <option value="video">video</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
