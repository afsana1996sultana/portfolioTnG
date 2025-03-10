@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Privacy & Policy</h1>
            </div>
        </div>
    </div>
    
    <section class="team-slills">
        <div class="container mb-80 mt-50">
            <div class="row">
                 <div class="col-lg-12 mb-40 mx-auto">
                    <div class="card py-4 px-3 shadow-sm">
                        @foreach($privacy as $val)
                            <h3 style="text-align: center; font-size: 24px !important;">{{$val->heading}}</h3>
                            <p class="">{!! $val->details !!}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-5">  
        <div class="padding-half bg-light-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="partners">
                            <div class="owl-carousel owl-theme home-client-carousel"> 
                                @foreach ($client as $val)
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{ asset('img/' . $val->logo_img) }}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection