@extends('backend.admin.layout.master')
@section('title','manage-service')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Manage Service </h4>
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
                    <td>Category</td>
                    <td>Order No</td>
                    <td>Status</td>
                    <td>Created By</td>
                    <td>Actions</td>
                </thead>
                <tbody>
                    @foreach($serviceDetails as $key=>$serviceDetail)
                        <tr>
                           <style>
                                   .admin, a, ml-1{
                                       padding:0px 6px;
                                       font-size:14px;
                                   }
                                </style>
                            <td>{{ ++$key }}</td>
                            <td>{{ $serviceDetail->title }}</td>
                            <td>{{ $serviceDetail->service_title }}</td>
                            <td>{{ $serviceDetail->order_no }}</td>
                            <td><a href="{{ URL::to('/service/'.$serviceDetail->id ) }}"><span class="badge {{ $serviceDetail->status ==='inactive' ?  'badge-secondary' : 'badge-info' }}">{{ $serviceDetail->status }}</span></a></td>
                            <td>{{ $serviceDetail->created_by }}</td>
                            <td>
                                <form action="{{ URL::to('/service/'. $serviceDetail->id) }}" method="post" onSubmit="return confirm('Do you want to delete service?')" class="admin">
                                 <a href="{{ URL::to('/service/'. $serviceDetail->id .'/edit') }}" class="ml-1"  title="Edit"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
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
                    {{ $serviceDetails->links() }}
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
