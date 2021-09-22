@extends('backend.admin.layout.master')
@section('title','home-image/video-list')


@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>List of Image/Video</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-sm table-bordered">
                <thead>
                    <td>SL</td>
                    <td>Type</td>
                    <td>Status</td>
                    <td>Src</td>
                    <td>Actions</td>
                </thead>
                <tbody>
                    @foreach($image_videos as $key=>$image_video)
                        <tr>
                                <style>
                                   .admin, a, ml-1{
                                       padding:0px 6px;
                                       font-size:14px;
                                   }
                                </style>

                            <td>{{ ++$key }}</td>
                            <td>{{ $image_video->ofType }}</td>
                            <td><a href="{{ URL::to('/image-video/'.$image_video->id) }}"><span class="badge {{ $image_video->status ==='inactive' ?  'badge-secondary' : 'badge-info' }}">{{ $image_video->status }}</span></a></td>
                            <td>{{ $image_video->src }}</td>
                            <td>
                                <form action="{{ URL::to('/image-video/'.$image_video->id ) }}" method="post" onSubmit="return confirm('Do you want to delete this?')" class="admin">
                                 <a href="{{ URL::to('/image-video/'.$image_video->id.'/edit') }}" class="ml-1"  title="Edit"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-1"><i class="fa fa-trash-o fa-lg" aria-hidden="true"  title="Delete"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div>
                <span>
                    {{ $image_videos->links() }}
                </span>
            </div>
        </div>
    </div>
@endsection
