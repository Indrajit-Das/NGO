@extends('backend.users.layout.master')
@section('title',Auth::user()->name."-admin-notice")

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Notice </h4>
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
            @if($all)
                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <td>Notice-Title</td>
                            <td>Seen-At</td>
                            <td>Details</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all as $notice)
                            <tr>
                               <style>
                                   .ml-1{
                                       padding:0px 6px;
                                       font-size:14px;
                                   }
                                </style>
                                <td>{{ $notice->title }}</td>
                                <td>{{ $notice->seen_at }}</td>
                                <td><a href="{{ URL::to('user/notice/seen/'.$notice->notice_id) }}" title="Details" class="ml-5"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
@push('js')
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
