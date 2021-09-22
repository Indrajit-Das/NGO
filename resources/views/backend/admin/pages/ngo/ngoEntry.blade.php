@extends('backend.admin.layout.master')
@section('title','ngo-entry')

@section('content')
    <div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
        <div class="card-header text-center">
            <h4>Ngo Enrty</h4>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/ngo') }}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="english_name">English Name:<span class="ml-3" id="english_name"><b style="color: red">@error('english_name')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('english_name') }}" id="english_name" placeholder="Enter ngo English name" name="english_name">
                </div>
                <div class="form-group">
                    <label for="bangla_name">Bangla Name :<span class="ml-3" id="bangla_name"><b style="color: red">@error('bangla_name')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" id="bangla_name" value="{{ old('bangla_name') }}" name="bangla_name" placeholder="Enter ngo Bangla name">
                </div>
                <div class="form-group">
                    <label for="email">Email :<span class="ml-3" id="email"><b style="color: red">@error('email')*{{ $message }}@enderror</b></span></label>
                    <input type="email" class="form-control"  id="email" value="{{ old('email') }}" name="email" placeholder="Enter ngo email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone :<span class="ml-3" id="phone"><b style="color: red">@error('phone')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control"  id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter ngo phone no.">
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone :<span class="ml-3" id="telephone"><b style="color: red">@error('telephone')*{{ $message }}@enderror</b></span></label>
                    <input  class="form-control"  id="telephone" name="telephone" value="{{ old('telephone') }}" placeholder="Enter ngo telephone no.">
                </div>
                <div class="form-group">
                    <label for="fax">Fax :<span class="ml-3" id="fax"><b style="color: red">@error('fax')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" id="fax" value="{{ old('fax') }}" name="fax" placeholder="Enter ngo fax no.">
                </div>
                <div class="form-group">
                    <label for="address">Address :<span class="ml-3" id="address"><b style="color: red">@error('address')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('address') }}" id="address" name="address" placeholder="Enter ngo address">
                </div>
                <div class="form-group">
                    <label for="web_site">Web Site :<span class="ml-3" id="web_site"><b style="color: red">@error('web_site')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('web_site') }}" id="web_site" name="web_site" placeholder="Enter ngo website">
                </div>
                <div class="form-group">
                    <label for="password">Password :<span class="ml-3" id="password"><b style="color: red">@error('password')*{{ $message }}@enderror</b></span></label>
                    <input type="password" class="form-control"  id="password" name="password" placeholder="Enter ngo password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password :<span class="ml-3" id="password_confirmation"><b style="color: red">@error('password_confirmation')*{{ $message }}@enderror</b></span></label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter ngo password again">
                </div>

                <div class="form-group">
                    <style>
                        .formcontrol-image-input {
                            height: calc(30px + .75rem + 1px);
                        }
                    </style>
                    <label for="logo">logo :<span class="ml-3" id="logo"><b style="color: red">@error('logo')*{{ $message }}@enderror</b></span></label>
                        <div class="preview-img" id="preview">
                            <style>
                                .preview-img img{
                                    width: 150px;
                                    height: 120px;
                                    object-fit: cover;
                                }
                            </style>
                            <img  id="galleryPhotoPreview"/>
                        </div>
                    <input class="form-control formcontrol-image-input mt-2" type="file" id="logo" name="logo" onchange="preview_image(event)">
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
        function preview_image(event) {
            document.getElementById('preview').style.display="block";
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById("galleryPhotoPreview");
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endpush
