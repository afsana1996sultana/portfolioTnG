@extends('frontend.master')
@section('main_content')
<style>
    .about-counter {
        padding-bottom: 50px;
    }
</style>
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Why Choose Us</h1>
            </div>
        </div>
    </div>
    <section class="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <img src="{{url('frontend/images/man1.png')}}" alt="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="why-right">
                        <div class="ot-heading">
                            <span>// about company</span>
                            <h2 class="main-heading">TngPlus Electric</h2>
                        </div>
                        <p style="text-align: justify; font-size: 16px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                            type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="icon-box-s1">
                                    <div class="icon-main"><span class="flaticon-medal"></span></div>
                                    <h5>Experience</h5>
                                    <div class="line-box"></div>
                                    <p style="font-size: 16px;">Our great team of more than 40+ experts.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="icon-box-s1">
                                    <div class="icon-main"><span class="flaticon-gear"></span></div>
                                    <h5>Quick Support</h5>
                                    <div class="line-box"></div>
                                    <p style="font-size: 16px;">We’ll help you test bold new ideas while sharing your.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="s-counter4 why">
                        <div class="row">
                            @foreach($count as $val)
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-lg-0">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="{{$val->client_num}}" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">active Clients</h6>                             
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-lg-0">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="{{$val->project_num}}" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">projects done</h6>                              
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-sm-0">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="{{$val->support_num}}" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">Supports</h6>                              
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="{{$val->worker_num}}" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">Hard Workere</h6>                             
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</div>

@endsection