@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-photo-gallery-entry')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header text-center">
            <h4>Gallery Photo Enrty</h4>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('user/photo-gallery') }}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title:<span class="ml-3" id="title_error"><b style="color: red">@error('title')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('title') }}" id="title" placeholder="Enter title for photo gallery" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description :<span class="ml-3" id="description"><b style="color: red">@error('description')*{{ $message }}@enderror</b></span></label>
                    <textarea class="form-control" rows="3" id="description" name="description" placeholder="Enter Description"></textarea>
                </div>
                <div class="form-group">
                    <style>
                        .formcontrol-image-input {
                            height: calc(30px + .75rem + 1px);
                        }
                    </style>
                    <label for="photo">Photo :<span class="ml-3" id="photo"><b style="color: red">@error('photo')*{{ $message }}@enderror</b></span></label>
                        <style>
                                #image_preview img{
                                    width: 150px;
                                    height: 120px;
                                    /* object-fit: cover; */
                                    float: left;
                                }
                            </style>
                        <div id="image_preview">
                            {{-- to add the images  --}}
                        </div>
                    <input class="form-control formcontrol-image-input mt-2" type="file" id="gallery_photo" name="photo[]" onchange="gallery_image(event)" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        // gallery image preview
        $(function(){
            $("#preview").hide();
        });
        function gallery_image(event){
            var total_file=document.getElementById("gallery_photo").files.length;
            for(var i=0;i<total_file;i++)
            {
                $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
            }
        }
    </script>
@endpush
