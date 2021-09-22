@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-employee-list')

@section('content')

    <div class="card">
        <div class="card-header text-center">
            <h4>Employee List</h4>
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
                    <td>Designation</td>
                    <td>Phone</td>
                    <td>email</td>
                    <td>Status</td>
                    <td>Actions</td>
                </thead>
                <tbody>
                    @foreach($employees as $key=>$employee)
                        <tr>
                           <style>
                                   .admin, a, ml-1{
                                       padding:0px 6px;
                                       font-size:14px;
                                   }
                                </style>
                            <td>{{ ++$key }}</td>
                            <td><img src="{{ asset('storage/employee_image/'.$employee->photo) }}" style="height: 60px;width:100px"></td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->designation }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->email }}</td>
                            <td><a href="{{ URL::to('/user/employee/status/'.$employee->id) }}"><span class="badge {{ $employee->status ==='inactive' ?  'badge-secondary' : 'badge-info' }}">{{ $employee->status }}</span></a></td>
                            <td>
                                <form action="{{ URL::to('/user/employee/'.$employee->id) }}" method="post" onSubmit="return confirm('Do you want to delete Administrator?') " class="admin">
                                 <a href="{{ URL::to('/user/employee/'.$employee->id) }}" class="ml-1" title="Details"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                                 <a href="{{ URL::to('/user/employee/'.$employee->id.'/edit') }}" class="ml-1" title="Edit"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-1" title="Delete"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div>
                <span>
                    {{ $employees->links() }}
                </span>
            </div>
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
