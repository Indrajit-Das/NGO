@extends('backend.admin.layout.master')
@section('title',' all-notice')

@section('content')
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col-sm-4" style="margin-top:10px;">
                <a href="{{ URL::to('/notice') }}"><i class="fa fa-reply fa-lg" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-8">
                <h4>Notice-{{ Str::limit($notice->title, 30),' (...)' }}</h4>
            </div>
           </div>

        </div>
        <div class="card-body">
            {{-- <table class="table table-sm table-bordered">
                <tbody>
                    <tr>
                        <td>Title</td>
                        <td>{{ $notice->title }}</td>
                    </tr>
                    <tr>
                        <td>Notice</td>
                        <td>{{ $notice->notice }}</td>
                    </tr>
                </tbody>
            </table> --}}
            <div class="card-text mt-4">
                <div class="text-one">
                    {{ $notice->notice }}
                </div><br>
                <div class="mt-1 text-to">ধন্যবাদান্তে,</div>
                <div class="mt-3 text-too">জেলা এনজিও বিষয়ক সমন্বয় কমিটি ও প্রকাশণা উপকমিটি</div>
                <div class="mt-2 text-too">জেলা প্রশাসকের কাযালয়, বাগেরহাট। </div>
                {{-- <div class="mt-5"> <i class="fa fa-paperclip"></i><b class="ml-3"></b> Attachments</div> --}}
            </div>
        </div>
        <div class="card-footer">
            <div class="card-header">
                <h4>Comments:</h4>
            </div>
            @foreach ($notice->seen as $see)
                <div class="mt-3">
                    @if($see->comment != null)
                    <h6 style="text-decoration: underline"> {{ $see->ngos->english_name }} :</h6>
                        <p>{{ $see->comment }}</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
