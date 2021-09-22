@extends('frontend.main-site.layout.master')
@section('title','Contact-Us-')

@section('main-content')
    <div class="container my-2">
        <div class="row">
            <div class="col-sm-6">
                <div class="contact-up">
                    <div class="contact-img">
                        <img src="http://technosoft.com.bd/images/contact.jpg" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-center">
                     <p>Contact us and we'll get back to you within 24 hour</p>
                </div>
                <div class="card-body">
                     <div class="contact-up2 pt-md-3">

                        {{-- <p><i class="fa fa-fw fa-phone"></i> 01792102040</p> --}}
                        <p class="mb-3 mt-1"> <i class="fa fa-fw fa-phone"></i>
                        @if($contacts)
                            {{ $contacts->phone }}
                        @endif
                        </p>
                        <p class="mb-3">  <i class="fa fa-envelope-o"> </i>

                            @if($contacts)
                                <pan></pan> {{ $contacts->email }}
                            @endif
                        </p>
                        <p>
                             <i class="fa fa-globe"></i> @if($contacts) {{ $contacts->address }} @endif
                        </p>
                </div>
                <br><br><br>
                </div>
            </div>
            </div>
        </div>
        <div class="mt-2">
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14673.758634241385!2d89.22243625!3d23.15414835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff104405261fdd%3A0x4fbad1b6c8d9681b!2sSheikh%20Hasina%20Software%20Technology%20Park!5e0!3m2!1sen!2sbd!4v1593328026165!5m2!1sen!2sbd" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
@endsection



