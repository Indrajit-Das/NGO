@extends('backend.users.layout.master');
@section('title')
    admin-notice
@endsection
@section('content')
    <div class="card">
        <div class="card-header text-center">
           <div class="row">
               <div class="col-sm-1" style="margin-top:12px;">
                <a href="{{ URL::to('user/all-notice/seen/all') }}"><i class="fa fa-reply fa-lg" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-10 text-center mr-auto">
                <h4>Notice </h4>
            </div>
           </div>
        </div>
        <div class="card-body">
            @if($notice)
                <div class="admin-date">
                    <h3 class="d-inline title">{{ $notice->created_by }}</h3>
                    <div class="from">From {{ $notice->created_by }}</div>
                    <div class="d-inline date float-right">Date: {{ $notice->created_at->format('d-m-Y') }} &nbsp; Time: {{ $notice->created_at->format('H:i:s') }}
                    </div>
                    <style>
                        .date{
                            position:relative;
                            bottom:36px;
                        }
                        .admin-date h3{
                            font-size:19px;
                        }
                    </style>
                </div>
                <div class="card-text mt-4">
                    <div class="text-one">
                        {{ $notice->notice }}
                    </div><br>
                    <div class="mt-1 text-to">ধন্যবাদান্তে,</div>
                    <div class="mt-3 text-too">জেলা এনজিও বিষয়ক সমন্বয় কমিটি ও প্রকাশণা উপকমিটি</div>
                    <div class="mt-2 text-too">জেলা প্রশাসকের কাযালয়, বাগেরহাট। </div>
                    {{-- <div class="mt-5"> <i class="fa fa-paperclip"></i><b class="ml-3"></b> Attachments</div> --}}
                </div>
                <div class="card-footer mt-3">
                    <div class="card-text">
                        <form action="{{ URL::to('user/notice/seen/') }}" method="post" >
                            @csrf
                            <div class="form-group">
                                <input type="hidden" value="{{ $seenId }}" name="seenId">
                                <label for="comment">Comment :</label>
                                <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Comment ...">@if($seen){{ $seen->comment }}@endif</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">comment</button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
