@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'scheduled-activity-edit')

@section('content')
    <div class="ml-auto mr-auto col-sm-8 ">
        <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col-sm-4" style="margin-top:8px">
                <a href="{{ URL::to('/user/scehduled-activity') }}"><i class="fa fa-reply fa-lg" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4>Scheduled-Activity Edit</h4>
            </div>
           </div>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/user/scehduled-activity/'.$activity->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="activity_date"> Activity Date:<span class="ml-3" id="activity_date"><b style="color: red">@error('activity_date')*{{ $message }}@enderror</b></span></label>
                    <input type="date" class="form-control" value="{{ $activity->activity_date }}" id="activity_date" name="activity_date">
                </div>
                <div class="form-group">
                    <label for="title"> Title:<span class="ml-3" id="title"><b style="color: red">@error('title')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $activity->title }}" id="title" placeholder="Enter Activity Title Here" name="title">
                </div>
                <div class="form-group">
                    <label for="description"> Description:<span class="ml-3" id="description"><b style="color: red">@error('description')*{{ $message }}@enderror</b></span></label>
                    <textarea type="text" rows="5" class="form-control"id="description" placeholder="Enter Activity Description here" name="description">{{ $activity->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
