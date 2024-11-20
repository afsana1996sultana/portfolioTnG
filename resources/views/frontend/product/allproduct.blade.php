@extends('frontend.master')
@section('main_content')
<style>
    .product__photo {
         height: auto !important; 
    }
</style>
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600; text-align: center;">{{ $childmenus->childmenu_name }}</h1>
            </div>
        </div>
    </div>

    <section class="contact-page" style="padding-top: 40px; padding-bottom: 40px;">
        <div class="container">
            {{-- <div class="row">
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-12  project-item {{ $product->child_menu_id }}">
                    <a href="{{ route('singleProduct', ['id' => $product->id]) }}" class="single__product__info text-center">
                        <div class="product__photo">
                            <img class="w-100 p-2" src="{{ asset($product->fitureImg) }}" alt="{{ $product->title }}" />
                        </div>
                        <div class="product__info">
                            <h6 class="mb-1">{{ Str::limit($product->title, 30)}}</h6>
                            <button>Read more</button>
                        </div>
                    </a>
                </div>
                @endforeach
            </div> --}}
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-filter-wrapper">
                        <div class="projects-grid projects-style-1 projects-col3">
                            <div class="row">
                                @foreach ($products as $product)
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