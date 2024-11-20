@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Our Branch</h1>
            </div>
        </div>
    </div>

    <section class="team-slills pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 card p-4 branch_address">
                    <h5 class="mb-0">1. Dhaka:</h5>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">
                        <span>Shop Name: S E TRADE INTERNATIONAL</span>
                    </p>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">
                        Address: <span>124,BCC Road, Ibrahim Electric & Electronics Market, Nawabpur Dhaka-1203</span>
                    </p>
                </div>
                <div class="col-lg-12 card p-4 mt-3 branch_address">
                    <h5 class="mb-0">2. Chittagong:</h5>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">
                        <span>Shop Name: Century Electric & Lighting</span>
                    </p>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">
                        Address: <span>Gulshan Plaza, Tin puler Matha, Chattogram</span>
                    </p>
                </div>
                 <div class="col-lg-12 card p-4 mt-3 branch_address">
                    <h5 class="mb-0">3. Chittagong 2:</h5>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">
                        <span>Shop Name: Hasna International</span>
                    </p>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">
                        Address: <span>183/7 Shah Amanat Electric Market Nandonkanon, Chattogram</span>
                    </p>
                </div>
                <div class="col-lg-12 card p-4 mt-3 branch_address">
                    <h5 class="mb-0">4. Jessore:</h5>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">
                        <span>Shop Name: Aminul Electric</span>
                    </p>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">
                        Address: <span>Khulna Road, Hustola Mor,Jessore</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br>
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