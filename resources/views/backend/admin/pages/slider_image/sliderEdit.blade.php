@extends('backend.admin.layout.master')
@section('title',' slider-image-edit')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col-sm-4" style="margin-top:10px;">
                <a href="{{ URL::to('/slider-image') }}"><i class="fa fa-reply fa-lg edit" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4>Slider Image Enrty</h4>
            </div>
           </div>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/slider-image/'.$slider->id ) }}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                            <img  src="{{ asset('storage/slider_image/'.$slider->slider_image) }}" id="galleryPhotoPreview"/>
                        </div>
                    <input class="form-control formcontrol-image-input mt-2" type="file" id="photo" name="photo" onchange="preview_image_edit(event)">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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
