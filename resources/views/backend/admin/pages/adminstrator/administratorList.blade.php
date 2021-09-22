@extends('backend.admin.layout.master')
@section('title')
    administrator-list
@endsection
@section('content')

    <div class="card">
        <div class="card-header text-center">
            <h4>Administrator List</h4>
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
                    <td>Image</td>
                    <td>Name</td>
                    <td>Title</td>
                    <td>Designation</td>
                    <td>Status</td>
                    <td>Actions</td>
                </thead>
                <tbody>
                    @foreach($administrator as $key=>$admin)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td><img src="{{ asset('storage/administrator_image/'.$admin->image) }}" style="height: 60px;width:100px"></td>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->title }}</td>
                            <td>{{ $admin->designation }}</td>
                            <td><a href="{{ URL::to('/administrator/status/'.$admin->id) }}"><span class="badge {{ $admin->status ==='inactive' ?  'badge-secondary' : 'badge-info' }}">{{ $admin->status }}</span></a></td>
                            <td>
                               <style>
                                   .admin, a, ml-1{
                                       padding:0px 6px;
                                       font-size:14px;
                                   }
                                </style>
                                <form action="{{ URL::to('/administrator/'.$admin->id) }}" method="post" onSubmit="return confirm('Do you want to delete Administrator?') " class="admin">
                                 <a href="{{ URL::to('/administrator/'.$admin->id) }}"  title="Details" class="ml-1"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                                 <a href="{{ URL::to('/administrator/'.$admin->id.'/edit') }}"  title="Edit"class="ml-1"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"  title="Delete" class="ml-1"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div>
                <span>
                    {{ $administrator->links() }}
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
