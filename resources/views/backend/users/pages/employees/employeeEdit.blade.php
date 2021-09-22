@extends('backend.users.layout.master')
@section('title',Auth::user()->name.'-employee-edit')

@section('content')
    <div class="ml-auto mr-auto col-sm-8 ">
        <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col-sm-4" style="margin-top:7px;">
                <a href="{{ URL::to('/user/employee') }}"><i class="fa fa-reply fa-lg" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4 class="ml-3">Employee Edit</h4>
            </div>
           </div>
        </div>
            <div class="card-body">
            <form action="{{ URL::to('/user/employee/'.$employee->id) }}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name"> Name:<span class="ml-3" id="name"><b style="color: red">@error('name')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ $employee->name }}" id="name" placeholder="Enter employee name" name="name">
                </div>
                <div class="form-group">
                    <label for="designation">Designation :<span class="ml-3" id="designation"><b style="color: red">@error('designation')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" id="designation"  value="{{ $employee->designation }}" name="designation" placeholder="Enter employee designation">
                </div>
                <div class="form-group">
                    <label for="email">Email :<span class="ml-3" id="email"><b style="color: red">@error('email')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" type="email" id="email" value="{{ $employee->email }}" name="email" placeholder="Enter employee email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone :<span class="ml-3" id="phone"><b style="color: red">@error('phone')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" value="{{ $employee->phone }}" id="phone" name="phone" placeholder="Enter employee phone no.">
                </div>

                <div class="form-group">
                    <style>
                        .formcontrol-image-input {
                            height: calc(30px + .75rem + 1px);
                        }
                    </style>
                    <label for="image">Photo :<span class="ml-3" id="image"><b style="color: red">@error('image')*{{ $message }}@enderror</b></span></label>
                        <div class="preview-img" id="preview-edit">
                            <style>
                                .preview-img img{
                                    width: 150px;
                                    height: 120px;
                                    object-fit: cover;
                                }
                            </style>
                            <img  src="{{ asset('storage/employee_image/'.$employee->photo) }}" id="galleryPhotoPreview"/>
                        </div>
                    <input class="form-control formcontrol-image-input mt-2" type="file" id="image" name="image" onchange="preview_image_edit(event)">
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
