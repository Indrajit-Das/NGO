@extends('backend.admin.layout.master')
@section('title','all-notice')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>All Notice's</h4>
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
            <table class="table table-sm table-bordered">
                <thead>
                    <td>SL</td>
                    <td>Title</td>
                    <td>Seen-By</td>
                    <td>Date</td>
                    <td>Details</td>
                </thead>
                <tbody>
                    @foreach($notices as $key=>$notice)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ Str::limit($notice->title, 30),' (...)' }}</td>
                            <td>
                                @foreach ($notice->seen as $see)
                                    <span class="badge badge-primary">{{ $see->ngos->english_name }}</span>
                                @endforeach
                            </td>
                            {{-- <td>{{ Str::limit($notice->notice, 40),' (...)' }}</td> --}}
                            {{-- <td>{{ $notice->created_by }}</td> --}}
                            <td>{{ $notice->created_at->format('d-m-Y') }}</td>
                            <td>
                                <a href="{{ URL::to('/notice/detail/'.$notice->id) }}">Read more.</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <span>
                    {{ $notices->links() }}
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
