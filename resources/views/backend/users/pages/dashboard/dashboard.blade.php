@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-dashboard')

@section('content')
    @if(Auth::user()->ngo->logo===null||Auth::user()->ngo->logo==''||Auth::user()->ngo->english_name==null||Auth::user()->ngo->bangla_name==null||Auth::user()->ngo->address==null||Auth::user()->ngo->telephone==null||Auth::user()->ngo->numberOfEmployees==null)
        <h5 class="text-center mt-2 text-danger" >Please complete your NGO information</h5>
    @endif
    @if(Auth::user()->ngo->status==='inactive')
        <div class="container  mt-5">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            Wait for Admin approval
                        </div>
                        <div class="card-body">
                            <p>Once Approved you will have other options</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        @else
        <div class="container  mt-5">
            <style>
                .widget-small .info h4 {
                    font-size: 16px;
                }
            </style>
            <div class="row">
                <div class="col-md-3">
                    <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                        <div class="info">
                            <h4>Employee'S</h4>
                            <p>
                                <b>
                                    @if($employee)
                                        {{ $employee }}
                                    @else
                                        0
                                    @endif
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-small primary coloured-icon">
                    <i class="icon fa fa-superpowers fa-3x"></i>
                        <div class="info">
                        <h4>Officer'S</h4>
                        <p>
                            <b>
                                @if($officer)
                                    {{ $officer }}
                                @else
                                    0
                                @endif
                            </b>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-small info coloured-icon">
                        <i class="icon fa fa-handshake-o fa-3x" aria-hidden="true"></i>

                        {{-- <i class="icon fa fa-users fa-3x"></i> --}}
                        <div class="info">
                        <h4>projects</h4>
                        <p>
                            <b>
                                @if($projects)
                                    {{ $projects }}
                                @else
                                    0
                                @endif
                            </b>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-small warning coloured-icon">
                        <i class="icon fa fa-picture-o fa-3x" aria-hidden="true"></i>

                        {{-- <i class="icon fa fa-users fa-3x"></i> --}}
                        <div class="info">
                            <h4>Photo Galleries</h4>
                            <p>
                                <b>
                                    @if($photoGallery)
                                        {{ $photoGallery }}
                                    @else
                                        0
                                    @endif
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
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
                                       <style>
                                   .admin, a, ml-1{
                                       padding:0px 6px;
                                       font-size:14px;
                                   }
                                </style>
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
                <div class="card-footer">
                    <span>{{ $activities->links() }}</span>
                </div>
            </div>
        </div>
    @endif
@endsection
