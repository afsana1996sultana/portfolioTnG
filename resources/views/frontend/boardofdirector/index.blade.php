@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Board Of Directors</h1>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($director as $val)
        <div class="col-lg-6">
            <section class="team-about sm-space">
                <div class="container">
                    <div class="steam-info">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="team-info-left pt-4 pl-3 mt-3">
                                    <img src="{{ asset('img/' . $val->image) }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="team-detail pt-5">
                                    <h4>{{$val->name}}</h4>
                                    <span class="location">{{$val->designation}}</span>
                                    <ul class="bold member-info">
                                        <li><span class="text-dark">Qualification: </span>{{$val->qualification}}</li>
                                        <li><span class="text-dark">Email: </span>{{$val->email}}</li>
                                        <li><span class="text-dark">Phone: </span>{{$val->phone}}</li>
                                    </ul>
                                    <div class="otf-social-share clearfix shape-circle pb-4">
                                        <a class="share-facebook" href="{{$val->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a class="share-twitter" href="{{$val->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="share-pinterest" href="{{$val->pinterest}}" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                        <a class="share-linkedin" href="{{$val->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endforeach
    </div>

    <section class="team-slills">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Biography</h3>
                    <p style="text-align: justify; font-size: 16px;">MD Sobuj Islam, the esteemed Chief Executive Officer of J.S Packaging Machineries, holds a Bachelor's degree in Civil Engineering, reflecting his dedication to mastering technology and innovation. Under his visionary leadership, the company has become a pioneering force in Food Processing & Packing Machines and related Equipment & Spares, driven by an unwavering commitment to quality and customer satisfaction. Sobuj Islam's dynamic approach extends beyond business, encompassing a strong sense of social responsibility and community impact. He envisions a harmonious future where industrial progress and sustainability coexist. To connect with MD Sobuj Islam, reach out via email at js.proprietor@gmail.com or by phone at 01922222222. His visionary leadership continues to shape the trajectory of J.S Packaging Machineries, leaving a lasting mark on industry innovation and progress.
                    </p>
                </div>
            </div>
            <div class="space-25"></div>
            <div class="row">
                @foreach($skill as $val)
                <div class="col-xl-3 col-lg-6 col-md-6 text-center text-md-right">
                    <div class="circle-progress" data-color="#43BAFF" data-height="10" data-size="135">
                        <div class="inner-bar" data-percent="{{$val->skill_amount}}">
                            <span><span class="percent">{{$val->skill_amount}}</span>%</span>
                        </div>
                        <h4>{{$val->skill_name}}</h4>        
                    </div>
                </div>
                @endforeach
            </div>
            <div class="space-50"></div>
            <div class="row">
                <div class="col-lg-12">
                    <h3>Hard Skills</h3>
                    <p style="text-align: justify; font-size: 16px;">MD Sobuj Islam, the accomplished CEO of J.S Packaging Machineries, brings a wealth of technical expertise and innovation to his role. With a background in Civil Engineering, Sobuj Islam's proficiency spans a range of hard skills crucial for guiding the company to success. His engineering prowess ensures a deep understanding of structural design, project management, and technical solutions. Adept in the intricacies of Food Processing & Packing Machines and related Equipment & Spares, his skills encompass machinery design, automation, and manufacturing processes. Sobuj Islam's commitment to quality is evident in his expertise in quality control methodologies, contributing to the company's reputation for excellence. A seasoned leader, he excels in team coordination, project planning, and strategic execution, fostering an environment of innovation. Moreover, his community engagement aptitude aligns with his ability to forge impactful partnerships and initiatives. MD Sobuj Islam's hard skills drive J.S Packaging Machineries' growth, innovation, and sustainable progress at every turn.</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

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