@extends('backend.admin.layout.master')
@section('title','scheduled-activity-list')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Scheduled Activity List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <div class="widget widget-search">
                    <form role="search" method="get" class="search-form" action="#">
                        <input type="search" class="form-control" placeholder="Search here..." name="s" id="myInput">
                        <button type="submit" class="search-submit" title="Search">
                            <i class="icon-search fa fa-search"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </div>
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
                                <a href="{{ URL::to('/ngo/scheduled-activity/list/details/'.$activity->id) }}" class="ml-1" title="Details"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
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
