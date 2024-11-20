@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">FAQ</h1>
            </div>
        </div>
    </div>

    <section class="team-slills pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 card p-4 branch_address">
                    <h5 class="mb-0">✈ Dealership</h5>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">
                        <span>You will need Following things to apply for Dealership</span>
                    </p>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">1. Two Coppies Passport size photo</p>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">2. Trade license</p>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">3. Tin Certificate</p>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">4. Nid Card Colour copy</p>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">5. Visiting card</p>
                    <p style="text-align: justify; font-size: 16px;" class="mb-0">6. Shop Did copy</p>
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