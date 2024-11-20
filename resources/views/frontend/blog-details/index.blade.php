@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Blog Details</h1>
            </div>
        </div>
    </div>
    
    <!--Sidebar blog Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <section class="news-outer"> 
                        <div class="news-style-two">
                            <div class="inner-box">
                                <div>
                                    <img class="banner-img" src="{{url('public/img/'.$blogData->banner_img)}}" alt=""></a>
                                </div>
                        
                                <!--lower-content-->
                                <div class="lower-content">
                                    <h3>{{$blogData->title}}</h3>
                                    <!--post-meta-->
                                    <ul class="post-meta">
                                        <li><span class="fa fa-heart-o"></span> 10 Likes</li>
                                        <li><span class="fa fa-comments-o"></span> 06 Comments</li>
                                    </ul>
                                    <p>{!! $blogData->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--Content Side-->
    
                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar news-sidebar">
                         <!-- Recent Posts -->
                        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sec-title-seven"><h2>Recent Posts</h2></div>
                            @foreach ($allblog as $val)	
                            <article class="post">
                                <figure class="post-thumb"><img src="{{url('public/img/'.$val->blog_img)}}" alt=""></figure>
                                <h4>{{ \Illuminate\Support\Str::limit($val->title, 30, $end='...') }}</h4>
                                <!--post-meta-->
                                <ul class="post-meta">
                                    <li>Jul, 03</li>
                                    <li><span class="fa fa-commenting-o"></span> 05 Comments</li>
                                </ul>
                            </article>
                            @endforeach
                        </div>
                        
                        <!--Call TO Action-->
                        <div class="sidebar-widget call-to-action-four wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image:url('/frontend/images/quote-widget.jpg');">
                            <div class="title">Any Questions related Industrial Solution? Call us</div>
                            <div class="number"><span class="fa fa-phone"></span>+8801712343038</div>
                            <a class="theme-btn btn-style-one" href="{{url('/contact-us')}}">GET QUOTES</a>
                        </div>
    
                        <!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sec-title-seven"><h2>Popular Tags</h2></div>
                            <a href="">Industrial Layout Plan</a>
                            <a href="">Plumbing Design</a>
                            <a href="">Structural Design</a>
                            <a href="">Fire Safety Design</a>
                            <a href="">Electrical Design</a>
                            <a href="">Architectural Design</a>
                            <a href="">LEED /GREEN Certification</a>
                        </div>
                    </aside>
                </div>
                <!--Sidebar-->
            </div>
        </div>
    </div>
    
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
