@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-scheduled-activity-details')

@section('content')
    <div class="ml-auto mr-auto col-sm-8 ">
        <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col-sm-3" style="margin-top:9px;">
                <a href="{{ URL::to('/user/scehduled-activity') }}"><i class="fa fa-reply fa-lg" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-9">
                <h4 class="ml-3">Scheduled-Activity Details</h4>
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
            @if($activity->comment != null)
            <div  class="mt-2">
                <h6>Admin-Comment :</h6>
                <p>{{ $activity->comment }}</p>
            </div>
            @endif
            @if($activity->mark_grade != null)
            <div  class="mt-2">
                <h6>Admin-Mark :</h6>
                <p>{{ $activity->mark_grade }}</p>
            </div>
            @endif
        </div>
    </div>
    </div>
@endsection
