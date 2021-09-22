@extends('backend.admin.layout.master')
@section('title','about-us')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>About Us</h4>
        </div>
        <div class="card-body">
            @if(!$about)
                <form action="{{ URL::to('/about-us') }}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="about">About Us :</label>
                        <textarea class="form-control" rows="10" id="about" name="about" placeholder="Enter About Us"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @else
                <form action="{{ URL::to('/about-us/'.$about[0]->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="about">About Us :</label>
                        <textarea class="form-control" rows="10"   id="about" name="about" placeholder="Enter About Us">{{ $about[0]->about_us }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endif
        </div>
    </div>
@endsection
