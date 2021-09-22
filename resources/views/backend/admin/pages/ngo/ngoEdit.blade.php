@extends('backend.admin.layout.master')
@section('title','ngo-edit')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header">
<div class="row">
   <div class="col-sm-4" style="margin-top:12px;">
                <a href="{{ URL::to('/ngo') }}"><i class="fa fa-reply fa-lg edit" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4 class="ml-5">Ngo Edit</h4>
            </div>
</div>

        </div>
        <div class="card-body">
            <form action="{{ URL::to('/ngo/'.$ngo->id) }}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="english_name">English Name:<span class="ml-3" id="english_name"><b style="color: red">@error('english_name')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $ngo->english_name }}" id="english_name" placeholder="Enter ngo English name" name="english_name">
                </div>
                <div class="form-group">
                    <label for="bangla_name">Bangla Name :<span class="ml-3" id="bangla_name"><b style="color: red">@error('bangla_name')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" value="{{ $ngo->bangla_name }}" id="bangla_name" name="bangla_name" placeholder="Enter ngo Bangla name">
                </div>
                <div class="form-group">
                    <label for="email">Email :<span class="ml-3" id="email"><b style="color: red">@error('email')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" value="{{ $ngo->email }}" id="email" name="email" placeholder="Enter ngo email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone :<span class="ml-3" id="phone"><b style="color: red">@error('phone')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" value="{{ $ngo->phone }}"  id="phone" name="phone" placeholder="Enter ngo phone no.">
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone :<span class="ml-3" id="telephone"><b style="color: red">@error('telephone')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" value="{{ $ngo->telephone }}" id="telephone" name="telephone" placeholder="Enter ngo telephone no.">
                </div>
                <div class="form-group">
                    <label for="fax">Fax :<span class="ml-3" id="fax"><b style="color: red">@error('fax')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" value="{{ $ngo->fax }}" id="fax" name="fax" placeholder="Enter ngo fax no.">
                </div>
                <div class="form-group">
                    <label for="address">Address :<span class="ml-3" id="address"><b style="color: red">@error('address')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" value="{{ $ngo->address }}" id="address" name="address" placeholder="Enter ngo address">
                </div>
                <div class="form-group">
                    <label for="web_site">Web Site :<span class="ml-3" id="web_site"><b style="color: red">@error('web_site')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $ngo->webAddress }}" id="web_site" name="web_site" placeholder="Enter ngo website">
                </div>
                <div class="form-group">
                    <style>
                        .formcontrol-image-input {
                            height: calc(30px + .75rem + 1px);
                        }
                    </style>
                    <label for="logo">logo :<span class="ml-3" id="logo"><b style="color: red">@error('logo')*{{ $message }}@enderror</b></span></label>
                        <div class="preview-img" id="preview-edit">
                            <style>
                                .preview-img img{
                                    width: 150px;
                                    height: 120px;
                                    object-fit: cover;
                                }
                            </style>
                            <img src="{{ asset('storage/ngo_logo/'.$ngo->logo) }}" id="galleryPhotoPreview"/>
                        </div>
                    <input class="form-control formcontrol-image-input mt-2" type="file" id="logo" name="logo" onchange="preview_image_edit(event)">
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
