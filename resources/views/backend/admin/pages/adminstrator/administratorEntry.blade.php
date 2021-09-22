@extends('backend.admin.layout.master')
@section('title','administrator-entry')

@section('content')
    <div class="ml-auto mr-auto col-sm-8 ">
        <div class="card">
        <div class="card-header text-center">
            <h4>Administrator Enrty</h4>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('/administrator') }}" method="post"  enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name"> Name:<span class="ml-3" id="name"><b style="color: red">@error('name')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('name') }}" id="name" placeholder="Enter administrator name" name="name">
                </div>
                <div class="form-group">
                    <label for="title"> Title:<span class="ml-3" id="title"><b style="color: red">@error('title')*{{ $message }}@enderror</b></span></label>
                    <input type="text" class="form-control" value="{{ old('title') }}" id="title" placeholder="Enter administrator title" name="title">
                </div>
                <div class="form-group">
                    <label for="designation">Designation :<span class="ml-3" id="designation"><b style="color: red">@error('designation')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control" id="designation" name="designation" placeholder="Enter administrator designation">
                </div>
                <div class="form-group">
                    <label for="email">Email :<span class="ml-3" id="email"><b style="color: red">@error('email')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control"  id="email" name="email" placeholder="Enter administrator email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone :<span class="ml-3" id="phone"><b style="color: red">@error('phone')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control"  id="phone" name="phone" placeholder="Enter administrator phone no.">
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone :<span class="ml-3" id="telephone"><b style="color: red">@error('telephone')*{{ $message }}@enderror</b></span></label>
                    <input class="form-control"  id="telephone" name="telephone" placeholder="Enter administrator telephone no.">
                </div>
                <div class="form-group">
                    <label for="join_date">Join Date:<span class="ml-3" id="join_date"><b style="color: red">@error('join_date')*{{ $message }}@enderror</b></span></label>
                    <input type='date' rows="5" class="form-control" id="join_date" name="join_date" placeholder="Enter join_date">
                </div>
                <div class="form-group">
                    <label for="message">message :<span class="ml-3" id="message"><b style="color: red">@error('message')*{{ $message }}@enderror</b></span></label>
                    <textarea rows="5" class="form-control" id="message" name="message" placeholder="Enter message"></textarea>
                </div>
                <div class="form-group">
                    <style>
                        .formcontrol-image-input {
                            height: calc(30px + .75rem + 1px);
                        }
                    </style>
                    <label for="image">Photo :<span class="ml-3" id="image"><b style="color: red">@error('image')*{{ $message }}@enderror</b></span></label>
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
                    <input class="form-control formcontrol-image-input mt-2" type="file" id="image" name="image" onchange="preview_image(event)">
                </div>
                 <div class="form-group">
                    <label for="order_no"> order_no:<span class="ml-3" id="order_no"><b style="color: red">@error('order_no')*{{ $message }}@enderror</b></span></label>
                    <input type="number" class="form-control" value="{{ old('order_no') }}" id="order_no" placeholder="Enter order_no" name="order_no">
                </div>
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
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
