@extends('frontend.master')
@section('main_content')
<style>
    h6 {
        font-size: 16px !important;
        margin: 0 0 10px !important;
    }
</style>
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">About Us</h1>
            </div>
        </div>
    </div>

    <section class="about-offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center mb-30 mb-lg-0">
                    @foreach($aboutus as $val)  
                        <div class="ot-heading">
                            <h2 class="main-heading">{{$val->heading}}</h2>
                        </div>
                        <div class="space-5"></div>
                        <div style="text-align: justify;">{!! $val->details !!}</div>      
                        <div class="space-20"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    
    <section class="team-slills">
        <div class="container">
            <h3 class="text-center pb-3">Our Certificates</h3>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="certificate_item">
                        <h6>Certificate of Registration of Designs</h6>
                        <img class="w-100" src="{{ asset('frontend/images/certificate/certificate-1.webp') }}" style="border: 2px solid #1b1225 !important;" />
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="certificate_item">
                        <h6>Trade Mark Certificate in China</h6>
                        <img class="w-100" src="{{ asset('frontend/images/certificate/certificate-2.webp') }}" style="border: 2px solid #1b1225 !important;"/>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="certificate_item">
                        <h6>Certificate of Patent Design in China Page-1</h6>
                        <img class="w-100" src="{{ asset('frontend/images/certificate/certificate-3.webp') }}" style="border: 2px solid #1b1225 !important;"/>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 pt-5">
                    <div class="certificate_item">
                        <h6>Certificate of Patent Design in China Page-2</h6>
                        <img class="w-100" src="{{ asset('frontend/images/certificate/certificate-4.webp') }}" style="border: 2px solid #1b1225 !important;"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

    <section class="pt-5">
        <div class="text-center">
            <h3>Our Valuable Clients</h3>
        </div>
        
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