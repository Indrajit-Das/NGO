@extends('backend.admin.layout.master')
@section('title','our-history')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Our History</h4>
        </div>
        <div class="card-body">
            @if(!$history)
                <form action="{{ URL::to('/our-history') }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="history">History :</label>
                        <textarea class="form-control" rows="10" id="history" name="history" placeholder="Enter Our History"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @else
                <form action="{{ URL::to('/our-history/1') }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="history">History :</label>
                        <textarea class="form-control" rows="10"   id="history" name="history" placeholder="Enter Our History">{{ $history[0]->history }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endif
        </div>
    </div>
@endsection
