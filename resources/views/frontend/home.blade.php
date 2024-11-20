@extends('frontend.master')
@section('main_content')

<style>
    .icon-box-s1{
        display:none;
    }
    .text-primary-light{
        color: #1b1d21 !important;
    }

    .showAllBtn {
        text-align: center;
        padding-top: 30px;
    }

    .showAllBtn button {
        text-transform: capitalize;
        border-radius: 5px;
        background: #1a1327;
        font-size: 16px;
        transition: all .5s ease-in-out;
        color: #fff;
        font-weight: 700;
        border: 1px solid;
        padding: 5px 20px;
    }
    .product__photo {
         height: auto !important;
    }
</style>

<div class="slider__active owl-carousel">
    @foreach ($sliders as $slider)
        <div class="item">
            <img src="{{ asset('/img/slider/'. $slider->slider_image) }}" style="width:100%" alt="slider Image">
        </div>
    @endforeach
</div>


<section class="over-hidden" style="padding-bottom:50px; padding-top:50px">
    <div class="container">
        <h2 class="main-heading text-center">Welcome To T n G Plus</h2>
        <p class="mb-15 Fs-16 text-center mb-5">T n G Plus is a conglomerate based in Nawabpur, Bangladesh. It comprises numerous subsidiaries and affiliated businesses, most of them united under the T n G Plus brand.
        The subsidiaries include  T n G, T n G Plus, T n G luxury, T n G Super, switch socket  all kind of electronic product.
        T n G Plus Group of Industries was founded by Md Habibur Rahman Khan in 2020 as a trading company. Over the next decades the group diversified into electrical accessories industries</p>
        <div class="row">
            <div class="col-lg-5 col-md-12 align-self-center">
                <div class="ot-heading">
                    <h2 class="main-heading">About company</h2>
                </div>
                <p class="mb-15 Fs-16" style="text-align: justify;">T n G Plus Group of Industries was founded by Md Habibur Rahman Khan in 2020 as a trading company.
                    Over the next decades the group diversified into electrical accessories industries.
                    T n G Plus entered into the Electronic industry in late 2020.T n G Plus has expanded towards electronics business and these became its most important sources of income.
                    T n G Plus is one of the regular tax payers in Bangladesh and has a strong impact on the country’s economy.
                    It is the one of  the largest manufacturers of household switch sockets, having maximum market share in Bangladesh.
                </p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="icon-box-s1">
                            <div class="icon-main"><span class="flaticon-medal"></span></div>
                            <h5>Experience</h5>
                            <div class="line-box"></div>
                            <p class="Fs-16">
                                Empowering industries with innovation, quality, and customer-centricity. Guided by core
                                values: innovation, excellence, sustainability, and social responsibility.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="icon-box-s1">
                            <div class="icon-main"><span class="flaticon-gear"></span></div>
                            <h5>Why Choose Us?</h5>
                            <div class="line-box"></div>
                            <p class="Fs-16">We thrive on innovation, consistently pushing the boundaries of whats
                                possible to provide solutions that make a difference.</p>
                        </div>
                    </div>
                    <div class="space-15"></div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-6 col-md-12 align-self-center">
                <div class="about-right">
                    <div class="home-about-video d-flex justify-content-center">
                        <img class="video-btn align-self-center" src="{{ url('frontend/images/about.webp') }}" alt="">
                    </div>
                    <div class="home-about-btn">
                        <div class="ot-button">
                            <a href="{{ url('/about') }}" class="btn-details"><i class="flaticon-right-arrow-1"></i>
                                LEANR MORE ABOUT US</a>
                            <div class="space-15"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- intro video start  --}}

{{-- <div id="video-container">
    <div class="container">
        <h2 class="main-heading text-center">Intro Video</h2>
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/kUJk6na-CF0?si=NYPYEX_1FmgToG5d" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div> --}}

{{-- intro video end  --}}

<section class="project-v4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="ot-heading" style="padding-top: 20px; margin-bottom: 5px;">
                    <span>LATEST PRODUCT</span>
                    <h2 class="main-heading">Introduce Our Product</h2>
                </div>
                <p>From sample approvals to final dispatch, our products are checked in order to ensure their quality.
                </p>
                <div class="space-10"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="project-filter-wrapper">
                    <ul class="project_filters">
                        <li><a href="#" data-filter="*" class="selected">All</a></li>
                        @foreach ($subMenus as $subMenu)
                            <li><a href="#" data-filter=".{{ $subMenu->id }}">{{ $subMenu->submenu_name }}</a></li>
                        @endforeach
                    </ul>
                    <div class="projects-grid projects-style-1 projects-col3">
                        <div class="row">
                            @foreach ($products->take(4) as $product)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6  project-item {{ $product->sub_menu_id }}">
                                <a href="{{ route('singleProduct', ['id' => $product->id]) }}" class="single__product__info text-center">
                                    <div class="product__photo">
                                        <img class="w-100" src="{{ asset($product->fitureImg) }}" alt="{{ $product->title }}" />
                                    </div>
                                    <div class="product__info">
                                        <h6 class="mb-1">{{ Str::limit($product->title, 30)}}</h6>
                                        <button>Read more</button>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>

                        {{-- <div class="row">
                            <div class="col-lg-12">
                                <div class="project-filter-wrapper">
                                    <div class="projects-grid projects-style-1 projects-col3">
                                        <div class="row">
                                            @foreach ($products->take(3) as $product)
                                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6  project-item {{ $product->child_menu_id }}">
                                                <a href="{{ route('singleProduct', ['id' => $product->id]) }}" class="single__product__info text-center">
                                                    <div class="product__photo">
                                                        <img class="w-100" src="{{ asset($product->fitureImg) }}" alt="{{ $product->title }}" />
                                                    </div>
                                                    <div class="product__info">
                                                        <h6 class="mb-1">{{ Str::limit($product->title, 30)}}</h6>
                                                        <button>Read more</button>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="showAllBtn">
                    <a href="{{ route('show.allproduct') }}"><button>Show All</button></a>
                </div>
                <div class="space-60"></div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="bg-dark-primary pt-3" style="padding-bottom:15px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ot-heading">
                    <span class="text-primary-light">why choose us</span>
                    <h2 class="main-heading text-white" style="color: #1b1d21 !important;">Quality, diversifications, customer<br>satisfaction We COUNT
                    </h2>
                </div>
                <div class="space-20"></div>
            </div>
        </div>
        <div class="row">
            @foreach ($choosesection as $val)
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="serv-box-2 c-hight s2">
                    <span class="big-number">{{ $val->sn }}</span>
                    <div class="icon-main">
                        <span class="{{ $val->icon }}"></span>
                    </div>
                    <div class="content-box">
                        <h5>{{ $val->title }}</h5>
                        <div style="text-align: justify;">{!! $val->detail !!}</div>
                        <a href="{{ url('/whychooseus') }}" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEARN MORE</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}



{{-- <section class="pt-5 pb-290">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 mb-4 mb-sm-0">
                <div class="ot-heading mb-0 text-center">
                    <span>// our service</span>
                    <h2 class="main-heading">We Offer a Wide Variety of Services</h2>
                </div>
            </div>
        </div>
        <div class="space-55"></div>
        <div class="row">
            @foreach ($service as $val)
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="icon-box-s2 s1 pb-60">
                    <div class="icon-main">
                        <span class="{!! $val->icon !!}"></span>
                    </div>
                    <div class="content-box">
                        <h5>{{ $val->title }}</h5>
                        <p class="Fs-16" style="text-align: justify;">{!! $val->details !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}

<section class="project-v4">
    <div class="container">
        <div class="row">
            <div class=col-lg-12>
                <div class="s-counter4">
                    <div class="row">
                        @foreach ($count as $val)
                        <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-lg-0">
                            <div class="ot-counter text-white">
                                <div>
                                    <span class="num" data-to="{{ $val->client_num }}" data-time="2000">0</span>
                                    <span>+</span>
                                </div>
                                <h6 class="text-white">active Clients</h6>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-lg-0">
                            <div class="ot-counter text-white">
                                <div>
                                    <span class="num" data-to="{{ $val->project_num }}" data-time="2000">0</span>
                                    <span>+</span>
                                </div>
                                <h6 class="text-white">projects done</h6>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-sm-0">
                            <div class="ot-counter text-white">
                                <div>
                                    <span class="num" data-to="{{ $val->support_num }}" data-time="2000">0</span>
                                    <span>+</span>
                                </div>
                                <h6 class="text-white">Supports</h6>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                            <div class="ot-counter text-white">
                                <div>
                                    <span class="num" data-to="{{ $val->worker_num }}" data-time="2000">0</span>
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

{{-- <section class="faq pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="ot-heading">
                    <span>// FAQ</span>
                    <h4 class="main-heading">Read Most Frequent Questions</h4>
                </div>
                <div class="space-25"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="ot-accordions">
                    @foreach ($frequentsection as $val)
                    <div class="acc-item">
                        <span class="acc-toggle">{{ $val->fre_question }}
                            <i class="down flaticon-download-arrow"></i><i class="up flaticon-up-arrow"></i>
                        </span>
                        <div class="acc-content">
                            <p>{!! $val->fre_answer !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ot-accordions">
                    @foreach ($frequentsection2 as $val)
                    <div class="acc-item">
                        <span class="acc-toggle">{{ $val->fre_question }}
                            <i class="down flaticon-download-arrow"></i><i class="up flaticon-up-arrow"></i>
                        </span>
                        <div class="acc-content">
                            <p>{!! $val->fre_answer !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="contact-page" style="padding-top:50px; padding-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-left">
                    <div class="ot-heading">
                        <span>// contact details</span>
                        <h2 class="main-heading">Contact us</h2>
                    </div>
                    <div class="space-5"></div>
                    <p style="font-size: 16px !important;">Give us a call or drop by anytime, we endeavour to answer
                        all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
                    <div class="contact-info box-style1">
                        <i class="flaticon-world-globe"></i>
                        <div class="info-text">
                            <h6>Corporate Office:</h6>
                            <p style="font-size: 16px !important;">124,BCC Road, Ibrahim Electric & Electronics Market, Nawabpur Dhaka-1203</p>
                        </div>
                    </div>
                    <div class="contact-info box-style1">
                        <i class="flaticon-envelope"></i>
                        <div class="info-text">
                            <h6>Our Mailbox:</h6>
                            <p style="font-size: 16px !important;">tngpluselectric@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-info box-style1">
                        <i class="flaticon-phone-1"></i>
                        <div class="info-text">
                            <h6>Our Phone:</h6>
                            <p style="font-size: 16px !important;">+8801310-997311</p>
                            <p style="font-size: 16px !important;">+8801721-893262 & +8801315-684240</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="wpcf7" id="ajaxmsg">
                    @csrf
                    <div class="main-form">
                        <h2>Ready to Get Started?</h2>
                        <p class="font14">Your email address will not be published. Required fields are marked *</p>
                        <p>
                            <input id="txtName" type="text" name="txtName" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name *" required="">
                        </p>
                        <p>
                            <input type="email" name="txtEmail" id="txtEmail" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Email *" required="">
                        </p>
                        <p>
                            <textarea name="txtMessage" id="txtMessage" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required=""></textarea>
                        </p>
                        <button id="snd_msg" class="octf-btn octf-btn-light">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $("#snd_msg").click(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#snd_msg').html('Please Wait...');
        $("#snd_msg").attr("disabled", true);

        $.ajax({
            url: "message_store"
            , type: "POST"
            , data: $('#ajaxmsg').serialize()
            , success: function(response) {
                $('#snd_msg').html('Submit');
                $("#snd_msg").attr("disabled", false);

                $("#txtName").val('');
                $("#txtEmail").val('');
                $("#txtMessage").val('');
                alert('Your Message has been submitted successfully');
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.slider__active').owlCarousel({
            items: 1
            , loop: true
            , margin: 0
            , animateOut: 'fadeOut'
            , animateIn: 'fadeIn'
            , nav: false
            , navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
            , dots: false
            , autoplay: true
            , autoplayTimeout: 5000
        });
    });

</script>
@endsection
