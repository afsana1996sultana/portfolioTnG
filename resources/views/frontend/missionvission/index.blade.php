@extends('frontend.master')
@section('main_content')
<style>
    .service-process .ot-heading {
        margin-bottom: 0px !important;
    }
    .projects-style-2 .projects-box .projects-thumbnail img {
        width: 480px !important;
        height: 330px !important;
         object-fit: cover; 
    }
    .service-web {
        padding-top: 50px;
        padding-bottom: 20px;
    }
</style>
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Mission & Vission</h1>
            </div>
        </div>
    </div>

    <section class="service-web">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center mb-5 mb-lg-0">
                    <img src="{{url('frontend/images/mission.webp')}}" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="service-process">
                        <div class="ot-heading">
                        <h3 class="main-heading">Mission & Vission</h3>
                            <span>// Our Vission</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="process-box">
                                    <p style="text-align: justify; font-size: 15px;">Our vission is to provide a safe and compliant consultancy for a cost effective and efficient project design to our valued clients. We want to ensure one-point service starting from planning, designs, site supervision, Soli investigations, testing & logistic support and compliance certifications.
                                    </p>
                                </div><br>
                                
                                <div class="ot-heading">
                                    <span>// Our Mission</span>
                                </div>
                                
                                <div class="process-box">
                                    <p style="text-align: justify; font-size: 15px;">Our mission is to deeply recognize the needs of our Clients who are constantly searching for the latest technologies and new ways of thinking to make the best project decisions. We continuously develop our knowledge and expertise and apply them in helping our Clients in their business activities. With wide experience, we also develop new, efficient software tools that enable our Clients to strengthen their business opportunities.
                                </div>
                            </div>
                        </div>
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