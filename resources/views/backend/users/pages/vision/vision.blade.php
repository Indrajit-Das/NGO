@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-vision')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Our Vision</h4>
        </div>
        <div class="card-body">
            @if(!$vision)
                <form action="{{ URL::to('user/visions') }}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="vision">Vision :</label>
                        <textarea class="form-control" rows="5" id="vision" name="vision" placeholder="Enter Our vision"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @else
                <form action="{{ URL::to('user/visions/'.$vision[0]->id ) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="vision">vision :</label>
                        <textarea class="form-control" rows="10"   id="vision" name="vision" placeholder="Enter Our vision">{{ $vision[0]->vision }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endif
        </div>
    </div>
@endsection
