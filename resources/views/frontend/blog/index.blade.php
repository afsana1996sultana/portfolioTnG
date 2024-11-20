@extends('frontend.master')
@section('main_content')
<style>
    .octf-btn{
        padding: 8px 15px 8px 15px !important;
    }
</style>
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">Blog</h1>
            </div>
        </div>
    </div>
    
    
    <!--two-col-section-->
    <section class="two-col-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column news-column col-md-12 col-sm-12 col-sm-12">
                    <div class="sec-title-one" style="padding-top: 40px;">
                        <h2>Latest Blogs</h2>
                    </div>
                    
                    <!--News Style One-->
                    @foreach($allblog as $val)
                    <div class="news-style-one">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="row clearfix">
                                <div class="image-column col-md-4 col-sm-4 col-xs-12">
                                   <figure class="image-box"><a href="{{URL::to('blog_details/'.$val->slug)}}">
                                   <img class="blog-img" src="{{url('img/'.$val->blog_img)}}" alt=""></a></figure>
                                </div>
    
                                <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                    <div class="content" style="padding-top: 35px;">
                                        <h3><a href="{{URL::to('blog_details/'.$val->slug)}}">{{$val->title}}</a></h3>
                                        <div class="text">{!! \Illuminate\Support\Str::words(strip_tags($val->description), 15,'....')  !!}</div>
                                        <div class="ot-button text-left">
                                            <a href="{{URL::to('blog_details/'.$val->slug)}}" class="octf-btn octf-btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="shop_toolbar t_bottom">
                    <div class="pagination">
                        {{ $allblog->render("pagination::default") }}
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