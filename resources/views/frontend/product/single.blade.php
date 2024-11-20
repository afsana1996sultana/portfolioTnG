@extends('frontend.master')
@section('main_content')


<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">{{$product->title}}</h1>
            </div>
        </div>
    </div>

    <section class="contact-page" style="padding-top: 40px; padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-7">
                    <div class="product__gallery">
                        <div class="tab-content gallery" id="pills-tabContent">
                                <img src="{{ asset($product->fitureImg) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-5">
                    <div class="product__gallery__content">
                        <h3><strong>{{$product->title}}</strong></h3>
                        <p><strong>{{$product->childmenu->childmenu_name}}</strong></p>
                        <p>{!! $product->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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