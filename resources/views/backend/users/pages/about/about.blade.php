@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-about-us')


@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>About Us</h4>
        </div>
        <div class="card-body">
            @if(!$about)
                <form action="{{ URL::to('user/abouts') }}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="about">About :</label>
                        <textarea class="form-control" rows="10" id="about" name="about_us" placeholder="Enter about-us "></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @else
                <form action="{{ URL::to('user/abouts/'.$about[0]->id ) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="about">About :</label>
                        <textarea class="form-control" rows="10"   id="about" name="about_us" placeholder="Enter about-us">{{ $about[0]->about_us }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endif
        </div>
    </div>
@endsection
