@extends('backend.admin.layout.master')
@section('title','exe-committee-manage')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Manage Ngo Executive Committee</h4>
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
                    <td>SL</td>
                    <td>Name</td>
                    <td>Order No</td>
                    <td>Organization</td>
                    <td>Title in Committee</td>
                    <td>Mobile</td>
                    <td>Actions</td>
                </thead>
                <tbody>
                    @foreach($ngoCom as $key=>$com)
                        <tr>
                           <style>
                                   .admin, a, ml-1{
                                       padding:0px 6px;
                                       font-size:14px;
                                   }
                                </style>
                            <td>{{ ++$key }}</td>
                            <td>{{ $com->name }}</td>
                            <td>{{ $com->order_no }}</td>
                            <td>{{ $com->organization }}</td>
                            <td>{{ $com->title_in_committee }}</td>
                            <td>{{ $com->phone }}</td>
                            <td>
                                <form action="{{ URL::to('/ngo/committee/'.$com->id) }}" method="post" onSubmit="return confirm('Do you want to delete this?')" class="admin">
                                 <a href="{{ URL::to('/ngo/committee/'.$com->id.'/edit') }}" class="ml-1" title="Edit"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-1" title="Delete"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
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
                    {{ $ngoCom->links() }}
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
