@extends('backend.admin.layout.master')
@section('title',' contact')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Our Contact</h4>
        </div>
        <div class="card-body">
            @if(!$contact)
                <form action="{{ URL::to('/contact') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="phone">Phone:<span class="ml-3" id="phone"><b style="color: red">@error('phone')*{{ $message }}@enderror</b></span></label>
                        <input type="text" class="form-control" value="{{ old('phone') }}" id="phone" placeholder="Enter Phone Number" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone :<span class="ml-3" id="telephone"><b style="color: red">@error('telephone')*{{ $message }}@enderror</b></span></label>
                        <input class="form-control" rows="5" id="telephone" name="telephone" placeholder="Enter Telephone Number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email :<span class="ml-3" id="email"><b style="color: red">@error('email')*{{ $message }}@enderror</b></span></label>
                        <input class="form-control" rows="5" id="email" name="email" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <label for="fax">Fax :<span class="ml-3" id="fax"><b style="color: red">@error('fax')*{{ $message }}@enderror</b></span></label>
                        <input class="form-control" rows="5" id="fax" name="fax" placeholder="Enter Fax">
                    </div>
                    <div class="form-group">
                        <label for="address">Address<span class="ml-3" id="address"><b style="color: red">@error('address')*{{ $message }}@enderror</b></span></label>
                        <input class="form-control" rows="5" id="address" name="address" placeholder="Enter Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @else
                <form action="{{ URL::to('/contact/'.$contact[0]->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="phone">Phone:<span class="ml-3" id="phone"><b style="color: red">@error('phone')*{{ $message }}@enderror</b></span></label>
                        <input type="text" class="form-control" value="{{ $contact[0]->phone }}" id="phone" placeholder="Enter Phone Number" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone :<span class="ml-3" id="telephone"><b style="color: red">@error('telephone')*{{ $message }}@enderror</b></span></label>
                        <input type="text" class="form-control" value="{{ $contact[0]->telephone }}" id="telephone" name="telephone" placeholder="Enter Telephone Number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email :<span class="ml-3" id="email"><b style="color: red">@error('email')*{{ $message }}@enderror</b></span></label>
                        <input type="text" class="form-control" value="{{ $contact[0]->email }}" id="email" name="email" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <label for="fax">Fax :<span class="ml-3" id="fax"><b style="color: red">@error('fax')*{{ $message }}@enderror</b></span></label>
                        <input type="text" class="form-control" value="{{ $contact[0]->fax }}" id="fax" name="fax" placeholder="Enter Fax">
                    </div>
                    <div class="form-group">
                        <label for="address">Address<span class="ml-3" id="address"><b style="color: red">@error('address')*{{ $message }}@enderror</b></span></label>
                        <input type="text" class="form-control" value="{{ $contact[0]->address }}" id="address" name="address" placeholder="Enter Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endif
        </div>
    </div>
@endsection
