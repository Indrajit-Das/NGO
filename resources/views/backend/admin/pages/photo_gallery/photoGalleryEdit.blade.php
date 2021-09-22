@extends('backend.admin.layout.master')
@section('title','photo-gallery-edit')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col-sm-4" style="margin-top:10px;">
                <a href="{{ URL::to('/photo-gallery') }}"><i class="fa fa-reply fa-lg edit" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4>Gallery Photo Edit</h4>
            </div>
           </div>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/photo-gallery/'. $photoGallery->id) }}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title:<span class="ml-3" id="title_error"><b style="color: red">@error('title')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $photoGallery->title }}" id="title" placeholder="Enter title for photo gallery" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description :<span class="ml-3" id="description"><b style="color: red">@error('description')*{{ $message }}@enderror</b></span></label>
                    <textarea class="form-control" rows="3" id="description" name="description" placeholder="Enter Description">{{ $photoGallery->description }}</textarea>
                </div>
                <div class="form-group">
                    <style>
                        .formcontrol-image-input {
                            height: calc(30px + .75rem + 1px);
                        }
                    </style>
                    <label for="photo">Photo :<span class="ml-3" id="photo"><b style="color: red">@error('photo')*{{ $message }}@enderror</b></span></label>
                        <div  id="image_preview_new">
                            <style>
                                #image_preview_new img{
                                    width: 150px;
                                    height: 120px;
                                    float: left;
                                }
                            </style>
                        </div>

                        <div id="image_preview_edit_previous">
                            <style>
                                #image_preview_edit_previous img{
                                    width: 150px;
                                    height: 120px;
                                    /* object-fit: cover; */
                                    float: left;
                                }
                            </style>
                            @foreach ($photoGallery->photo as $ph)
                                <img src="{{ asset('storage/photo_gallery/'.$ph) }}" class="galleryPhotoPreviewEdit"/>
                            @endforeach
                        </div>

                    <input class="form-control formcontrol-image-input mt-2" type="file" id="photo_new"  name="photo[]" onchange="gallery_image_edit(event)" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        function gallery_image_edit(event){
            $('#image_preview_edit_previous').css("display","none");
            var total_file=document.getElementById("photo_new").files.length;
            for(var i=0;i<total_file;i++)
            {
                $('#image_preview_new').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
            }
        }
    </script>
@endpush
