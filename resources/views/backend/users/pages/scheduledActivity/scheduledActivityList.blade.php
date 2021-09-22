@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-scheduled-activity-list')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Scheduled Activity List</h4>
        </div>
        <div class="card-body">
            <div class="widget widget-search">
                <form role="search" method="get" class="search-form" action="#">
                    <input type="search" class="form-control" placeholder="Search here..." name="s" id="myInput">
                    <button type="submit" class="search-submit" title="Search">
                        <i class="icon-search fa fa-search"></i>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
            @if($activities)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                           <style>
                                   .admin, a, ml-1{
                                       padding:0px 6px;
                                       font-size:14px;
                                   }
                                </style>
                            <td>Activity-Title</td>
                            <td>Date</td>
                            <td>Comment</td>
                            <td>Mark</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                            <tr>
                                <td>{{ Str::limit($activity->title, 30),' (...)'  }}</td>
                                <td>{{ date('d-m-Y', strtotime($activity->activity_date)) }}</td>
                                <td>{{ Str::limit($activity->comment, 30),' (...)'  }}</td>
                                <td>{{ $activity->mark }}</td>
                                <td>
                                    <form action="{{ URL::to('/user/scehduled-activity/'.$activity->id) }}" method="post" onSubmit="return confirm('Do you want to delete Activity?') " class="admin">
                                        <a href="{{ URL::to('/user/scehduled-activity/'.$activity->id) }}" class="ml-1" title="Details"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                                        @if(date('Y-m-d') < $activity->activity_date)
                                            <a href="{{ URL::to('/user/scehduled-activity/'.$activity->id.'/edit') }}" class="ml-1" title="Edit"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-1" title="Delete"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
