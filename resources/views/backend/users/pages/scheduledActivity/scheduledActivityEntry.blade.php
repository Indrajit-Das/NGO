@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-scheduled-activity-entry')

@section('content')
    <div class="ml-auto mr-auto col-sm-8 ">
        <div class="card">
        <div class="card-header text-center">
            <h4>Scheduled-Activity Enrty</h4>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/user/scehduled-activity') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="activity_date"> Activity Date:<span class="ml-3" id="activity_date"><b style="color: red">@error('activity_date')*{{ $message }}@enderror</b></span></label>
                    <input type="date" class="form-control" value="{{ old('activity_date') }}" id="activity_date" name="activity_date">
                </div>
                <div class="form-group">
                    <label for="title"> Title:<span class="ml-3" id="title"><b style="color: red">@error('title')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('title') }}" id="title" placeholder="Enter Activity Title Here" name="title">
                </div>
                <div class="form-group">
                    <label for="description"> Description:<span class="ml-3" id="description"><b style="color: red">@error('description')*{{ $message }}@enderror</b></span></label>
                    <textarea type="text" rows="5" class="form-control"id="description" placeholder="Enter Activity Description here" name="description">{{ old('description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
