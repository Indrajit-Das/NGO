@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-info')
@section('content')
<div class="col-sm-8 ml-auto mr-auto">
        <div class="card">
            <div class="card-header text-center">
                <h4>Ngo Info Update</h4>
            </div>
            <div class="card-body">
            <form action="{{ URL::to('user/ngo-info/'.Auth::user()->ngo->id) }}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="english_name">English Name:<span class="ml-3" id="english_name"><b style="color: red">@error('english_name')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $ngo->english_name }}" id="english_name" placeholder="Enter ngo English name" name="english_name">
                </div>
                <div class="form-group">
                    <label for="bangla_name">Bangla Name :<span class="ml-3" id="bangla_name"><b style="color: red">@error('bangla_name')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" id="bangla_name" name="bangla_name" value="{{ $ngo->bangla_name }}" placeholder="Enter ngo Bangla name">
                </div>
                <div class="form-group">
                    <label for="email">Email :<span class="ml-3" id="email"><b style="color: red">@error('email')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control"  id="email" name="email" value="{{ $ngo->email }}" placeholder="Enter ngo email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone :<span class="ml-3" id="phone"><b style="color: red">@error('phone')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control"  id="phone" name="phone" value="{{ $ngo->phone }}" placeholder="Enter ngo phone no.">
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone :<span class="ml-3" id="telephone"><b style="color: red">@error('telephone')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control"  id="telephone" name="telephone" value="{{ $ngo->telephone }}" placeholder="Enter ngo telephone no.">
                </div>
                <div class="form-group">
                    <label for="fax">Fax :<span class="ml-3" id="fax"><b style="color: red">@error('fax')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" id="fax" name="fax"  value="{{ $ngo->fax }}" placeholder="Enter ngo fax no.">
                </div>
                <div class="form-group">
                    <label for="numberOfEmployees">Number of Employee :<span class="ml-3" id="fax"><b style="color: red">@error('fax')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" id="fax" name="numberOfEmployees"  value="{{ $ngo->numberOfEmployees }}" placeholder="Enter ngo employee number">
                </div>
                <div class="form-group">
                    <label for="address">Web Site :<span class="ml-3" id="address"><b style="color: red">@error('address')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" id="address" value="{{ $ngo->webAddress }}" name="webAddress" placeholder="Enter ngo web-site">
                </div>
                <div class="form-group">
                    <label for="address">Address :<span class="ml-3" id="address"><b style="color: red">@error('address')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" id="address" value="{{ $ngo->address }}" name="address" placeholder="Enter ngo address">
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


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
