@extends('backend.admin.layout.master')
@section('title','our-mission')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Our Mission</h4>
        </div>
        <div class="card-body">
            @if(!$mission)
                <form action="{{ URL::to('/our-mission') }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="mission">Mission :</label>
                        <textarea class="form-control" rows="10" id="mission" name="mission" placeholder="Enter Our Mission"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @else
                <form action="{{ URL::to('/our-mission/'.$mission[0]->id ) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="mission">Mission :</label>
                        <textarea class="form-control" rows="10"   id="mission" name="mission" placeholder="Enter Our Mission">{{ $mission[0]->mission }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endif
        </div>
    </div>
@endsection
