@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Management Team</h1>
            </div>
        </div>
    </div>

    <section class="team-top space-sm-top">
        <div class="container pb-4">
            <h2 class="team-top-title">Meet the Team of TNGPlus Electric</h2>
        </div>
        <div class="container-fluid text-center">
            <img src="{{url('frontend/images/background/TNGPlus.webp')}}" alt="">
        </div>
    </section>

    <section class="team-v3">
        <div class="container">
            <div class="space-50"></div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ot-heading">
                        <span>// our team</span>
                        <h2 class="main-heading">Our Leadership Team</h2>
                    </div>
                    <div class="space-5"></div>
                    <p style="font-size: 15px;">TNGPlus Electric have well experienced skill professional team who can provide you modern & innovative idea<br>for your requirement as well as economic fruitful solution.</p>
                    <div class="space-20"></div>
                </div>
            </div>
            <div class="row no-margin">
                @foreach($team as $val)
                <div class="col-lg-3 col-md-6"> 
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('img/'.$val->image)}}" alt="" style="height: 275px; width: 225px; object-fit: cover;">                                 
                            <div class="team-social flex-middle">
                                <div>
                                    <a rel="nofollow" href="{{$val->twitter}}" class="twitter"><i class="fab fa-twitter"></i></a>
                                    <a rel="nofollow" href="{{$val->linkedin}}" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    <a rel="nofollow" href="{{$val->facebook}}" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a rel="nofollow" href="{{$val->instagram}}" class="instagram"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>  
                        </div>
                        <div class="team-info">
                            <h6>{{$val->name}}</h6>
                            <span>{{$val->qualification}}</span>
                            <p>{{$val->designation}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-technology pb-5 mb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="technology-left">
                        <div class="ot-heading">
                            <h4 class="main-heading text-white">Other Team Members</h4>
                        </div>
                        <p style="text-align: justify; font-size: 15px;">Our people crucial in the delivery of our services and solutions to the clients.
                        In order to ensure that everyone is equipped with right skill, knowledge and attitude,
                        a comprehensive training program is put in place to constantly upgrade our people in 
                        technical and management skill.</p>
                        <div class="style-none text-white">
                            @foreach($teammember as $val)
                            <p style="text-align: justify; font-size: 15px;">{{$val->tm_name}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="padding-top:50px;">
                    <div class="about-right">
                        <img class="home-about-video d-flex justify-content-center" src="{{url('frontend/images/Team-members.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>  
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