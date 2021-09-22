@extends('backend.admin.layout.master')
@section('title','our-responsibility')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Our Responsibility</h4>
        </div>
        <div class="card-body">
            @if(!$responsibility)
                <form action="{{ URL::to('/our-responsibility') }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="mission">Responsibility :</label>
                        <textarea class="form-control" rows="10" id="responsibility" name="responsibility" placeholder="Enter Our Responsibility"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @else
                <form action="{{ URL::to('/our-responsibility/'.$responsibility->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="responsibility">Responsibility :</label>
                        <textarea class="form-control" rows="10"   id="responsibility" name="responsibility" placeholder="Enter Our Responsibility">{{ $responsibility->responsi }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endif
        </div>
    </div>
@endsection
