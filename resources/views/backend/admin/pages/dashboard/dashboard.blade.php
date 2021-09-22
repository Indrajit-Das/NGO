@extends('backend.admin.layout.master')
@section('title')
    dashboard
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-building fa-3x"></i>
          <style>
                .widget-small .info h4 {
                    font-size: 14px;
                }
          </style>
            <div class="info">
              <h4>NGO'S</h4>
              <p>
                <b>
                    @if($ngo)
                        {{ $ngo }}
                    @else
                        0
                    @endif
                </b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-bullhorn fa-3x" aria-hidden="true"></i>
            <div class="info">
              <h4>Notice's</h4>
                <p>
                  <b>
                    @if($notices)
                        {{ $notices }}
                    @else
                        0
                    @endif
                </b>
                </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa fa-asterisk fa-3x"></i>
            <div class="info">
              <h4>Service Categories</h4>
                <p>
                    <b>
                        @if($service_category)
                            {{ $service_category }}
                        @else
                            0
                        @endif
                    </b>
                </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-handshake-o fa-3x"></i>
            <div class="info">
              <h4>Services</h4>
                <p>
                    <b>
                        @if($services)
                            {{ $services }}
                        @else
                            0
                        @endif
                    </b>
                </p>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-superpowers fa-3x"></i>
            <div class="info">
              <h4>Administrator'S</h4>
              <p>
                <b>
                    @if($administrators)
                        {{ $administrators }}
                    @else
                        0
                    @endif
                </b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x" aria-hidden="true"></i>
            <div class="info">
              <h4>EXE. Committee member's</h4>
                <p>
                  <b>
                    @if($ngo_exe_com_members)
                        {{ $ngo_exe_com_members }}
                    @else
                        0
                    @endif
                </b>
                </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-file-image-o fa-3x"></i>
            <div class="info">
              <h4>Photo Galleries</h4>
                <p>
                    <b>
                        @if($gallery_photo)
                            {{ $gallery_photo }}
                        @else
                            0
                        @endif
                    </b>
                </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small bg-white  coloured-icon"><i class="icon fa fa-slideshare fa-3x  bg-success"></i>
            <div class="info">
              <h4 class="text-black">Slider Image</h4>
                <p class="text-black">
                    <b>
                        @if($slider)
                            {{ $slider }}
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
    <div class="row">
        <div class="container">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Scheduled Activity List</h4>
                </div>
                <div class="card-body">
                    <div class="widget widget-search">
                        <form role="search" method="get" class="search-form" action="#">
                            <input type="search" class="form-control" placeholder="Search  here..." name="s" id="myInput">
                            <button type="submit" class="search-submit" title="Search">
                                <i class="icon-search fa fa-search"></i>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                    </div>
                    @if($activities)
                        <table class="table table-sm table-bordered">
                            <thead>
                                <td>Logo</td>
                                <td>Title</td>
                                <td>Comment</td>
                                <td>Date</td>
                                <td>Actions</td>
                            </thead>
                            <tbody>
                                @foreach($activities as $activity)
                                    <tr>
                                       <style>
                                   .ml-1{
                                       padding:0px 6px;
                                       font-size:14px;
                                   }
                                </style>
                                        <td><img src="{{ asset('storage/ngo_logo/'.$activity->ngo->logo) }}" style="height: 60px;width:100px"></td>
                                        <td>{{  Str::limit($activity->title, 40),' (...)'  }}</td>
                                        <td>{{  Str::limit($activity->comment, 40),' (...)'  }}</td>
                                        <td>{{ date('d-m-Y', strtotime($activity->activity_date)) }}</td>
                                        <td>
                                            <a href="{{ URL::to('/ngo/scheduled-activity/list/details/'.$activity->id) }}" class="ml-5" title="Edit"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                        <div>
                            <span>
                                {{ $activities->links() }}
                            </span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
  {{-- search function --}}
    <script type="text/javascript">
        $("#myInput").on("keyup", function() {
            document.querySelector('form').addEventListener('click',function(event){
                event.preventDefault();
            });
            var value = $(this).val().toLowerCase();
            $("tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    </script>

@endpush
