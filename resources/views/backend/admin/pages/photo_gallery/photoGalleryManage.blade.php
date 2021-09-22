@extends('backend.admin.layout.master')
@section('title','manage-photo')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Manage photo's</h4>
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
                    <td>Title</td>
                    <td>Description</td>
                    <td>Photo</td>
                    <td>Status</td>
                    <td>Date</td>
                    <td>Actions</td>
                </thead>
                <tbody>
                    @foreach($photoGallery as $key=>$photo)
                        <tr>
                           <style>
                                   .admin, a, ml-1{
                                       padding:0px 6px;
                                       font-size:14px;
                                   }
                                </style>
                            <td>{{ ++$key }}</td>
                            <td>{{ Str::limit($photo->title, 15),' (...)' }}</td>
                            <td>{{ Str::limit($photo->description, 15),' (...)' }}</td>

                             <td>
                                @foreach ($photo->photo as $ph)
                                    <img src="{{ asset('storage/photo_gallery/'.$ph) }}" style='height: 40px;width:40px;float:left;margin-right:2px'>
                                 @endforeach
                            </td>
                            <td><a href="{{ URL::to('/photo-gallery/'.$photo->id) }}"><span class="badge {{ $photo->status ==='inactive' ?  'badge-secondary' : 'badge-info' }}">{{ $photo->status }}</span></a></td>
                            <td>{{ $photo->created_at->format('d-m-Y') }}</td>
                            <td>
                                <form action="{{ URL::to('/photo-gallery/'.$photo->id) }}" method="post" onSubmit="return confirm('Do you want to delete photo?')" class="admin">
                                 <a href="{{ URL::to('/photo-gallery/'. $photo->id.'/edit') }}" class="ml-1" title="Edit"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
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
                    {{ $photoGallery->links() }}
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
