@extends('backend.admin.layout.master');
@section('title','scheduled-activity-details')

@section('content')
    <div class="card">
        <div class="card-header">
           <div class="row">
              <div class="col-sm-4" style="margin-top:12px;">
                <a href="{{ URL::to('/ngo/scheduled-activity/list') }}"><i class="fa fa-reply fa-lg edit" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4 class="ml-5">Scheduled Activity List</h4>
            </div>
           </div>
        </div>
        <div class="card-body">
            <div class="mt-2">
                <h6>Date : <span>{{ date('d-m-Y', strtotime($activity->activity_date))  }}</span></h6>
            </div>
            <div  class="mt-4">
                <h6>Title :</h6>
                <p>{{ $activity->title }}</p>
            </div>
            <div  class="mt-2">
                <h6>Description :</h6>
                <p>{{ $activity->description }}</p>
            </div>
            <div class="mt-5">
                <form action="{{ URL::to('/ngo/scheduled-activity/list/details/'.$activity->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="mark"> Mark in Grade :<span class="ml-3" id="mark"><b style="color: red">@error('mark')*{{ $message }}@enderror</b></span></label>
                        <select id="mark" class="form-control" name="mark">

                            <option disabled selected>--Select One--</option>
                            <option value="A+" {{ $activity->mark_grade =='A+'? ' selected':'' }}>A+</option>
                            <option value="A" {{ $activity->mark_grade =='A'? ' selected':'' }}>A</option>
                            <option value="A-" {{ $activity->mark_grade =='A-'? ' selected':'' }}>A-</option>
                            <option value="B+" {{ $activity->mark_grade =='B+'? ' selected':'' }}>B+</option>
                            <option value="B" {{ $activity->mark_grade =='B'? ' selected':'' }}>B</option>
                            <option value="B-" {{ $activity->mark_grade =='B-'? ' selected':'' }}>B-</option>
                            <option value="F" {{ $activity->mark_grade =='F'? ' selected':'' }}>Fail</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comment"> Comment :<span class="ml-3" id="comment"><b style="color: red">@error('comment')*{{ $message }}@enderror</b></span></label>
                        <textarea type="text" rows="5" class="form-control"  id="comment" placeholder="Enter Comment About Activity Here" name="comment">@if($activity->comment !=null){{ $activity->comment }}@endif</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
