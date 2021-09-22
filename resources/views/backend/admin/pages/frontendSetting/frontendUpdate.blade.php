@extends('backend.admin.layout.master')
@section('title','frontend-logo-name')

@section('content')
<div class="col-sm-8 ml-auto mr-auto">
    <div class="card">
        <div class="card-header text-center">
            <h4>Update Logo/Name</h4>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('admin/frontend/setting') }}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Site Title:<span class="ml-3" id="title_error"><b style="color: red">@error('title')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $data->name }}" id="title" placeholder="Enter Site Title" name="title">
                </div>
                <div class="form-group">
                    <style>
                        .formcontrol-image-input {
                            height: calc(30px + .75rem + 1px);
                        }
                    </style>
                    <label for="photo">Photo :<span class="ml-3" id="photo"><b style="color: red">@error('photo')*{{ $message }}@enderror</b></span></label>
                        <div class="preview-img" id="preview-edit">
                            <style>
                                .preview-img img{
                                    width: 150px;
                                    height: 120px;
                                    object-fit: cover;
                                }
                            </style>
                            <img  src="{{ asset('storage/frontend/'.$data->logo) }}" id="galleryPhotoPreview"/>
                        </div>
                    <input class="form-control formcontrol-image-input mt-2" type="file" id="photo" name="photo" onchange="preview_image_edit(event)">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
    <script type="text/javascript">
        $(function(){
            $("#preview").hide();
        });
        function preview_image_edit(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById("galleryPhotoPreview");
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endpush
