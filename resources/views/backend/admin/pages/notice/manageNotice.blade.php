@extends('backend.admin.layout.master')
@section('title','manage-notice')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Manage Notice's</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
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
                    <td>Notice</td>
                    <td>Status</td>
                    <td>Created By</td>
                    <td>Date</td>
                    <td>Actions</td>
                </thead>
                <tbody>
                    @foreach($notices as $key=>$notice)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ Str::limit($notice->title, 30),' (...)' }}</td>
                            <td>{{ Str::limit($notice->notice, 40),' (...)' }}</td>
                            <td><a href="{{ URL::to('/notice/'. $notice->id) }}"><span class="badge {{ $notice->status ==='inactive' ?  'badge-secondary' : 'badge-info' }}">{{ $notice->status }}</span></a></td>
                            <td>{{ $notice->created_by }}</td>
                            <td>{{ $notice->created_at->format('d-m-Y') }}</td>
                            <td>
                               <style>
                                   .admin, a, ml-1{
                                       padding:0px 6px;
                                       font-size:14px;
                                   }
                                </style>
                                <form action="{{ URL::to('/notice/'. $notice->id) }}" method="post" onSubmit="return confirm('Do you want to delete Administrator?')" class="admin">
                                 <a href="{{ URL::to('/notice/'. $notice->id.'/edit') }}" class="ml-1"  title="Edit"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-1"  title="Delete"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                                    {{-- <input type="submit" value="Delete"> --}}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
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
