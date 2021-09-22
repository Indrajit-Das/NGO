@extends('backend.admin.layout.master')
@section('title','slider-image-manage')

@section('content')

    <div class="card">
        <div class="card-header text-center">
            <h4>Administrator List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-sm table-bordered">
                <thead>
                    <td>SL</td>
                    <td>Image</td>
                    <td>Status</td>
                    <td>Actions</td>
                </thead>
                <tbody>
                    @foreach($slider as $key=>$sl)
                        <tr>
                           <style>
                                   .admin, a, ml-1{
                                       padding:0px 6px;
                                       font-size:14px;
                                   }
                                </style>
                            <td>{{ ++$key }}</td>
                            <td><img src="{{ asset('storage/slider_image/'.$sl->slider_image) }}" style="height: 60px;width:100px"></td>
                            <td><a href="{{ URL::to('/slider-image/'.$sl->id) }}"><span class="badge {{ $sl->status ==='inactive' ?  'badge-secondary' : 'badge-info' }}">{{ $sl->status }}</span></a></td>
                            <td>
                                <form action="{{ URL::to('/slider-image/'.$sl->id) }}" method="post" onSubmit="return confirm('Do you want to delete Slider-image?') " class="admin">
                                 <a href="{{ URL::to('/slider-image/'.$sl->id.'/edit') }}" class="ml-1" title="Edit"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
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
                    {{ $slider->links() }}
                </span>
            </div>
        </div>
    </div>
@endsection
