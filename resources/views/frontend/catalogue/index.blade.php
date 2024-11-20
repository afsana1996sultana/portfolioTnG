@extends('frontend.master')
@section('main_content')
    <style>
        .single-catalogue {
            padding: 20px 0;
        }

        .single-catalogue h2 {
            font-size: 30px;
            margin-bottom: 30px;
        }
    </style>
    <div id="content" class="site-content">
        <div class="page-header flex-middle">
            <div class="container">
                <div class="inner flex-middle">
                    <h1 class="page-title" style="font-weight:600; text-align: center;">Catalogue</h1>
                </div>
            </div>
        </div>

        <!--catalogue-->
        <section class="industry-section catalogue">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-catalogue">
                            <img src="{{ url('frontend/images/slider/1.PNG') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-catalogue">
                            <img src="{{ url('frontend/images/slider/3.PNG') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-catalogue">
                            <img src="{{ url('frontend/images/slider/4.PNG') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-catalogue">
                            <img src="{{ url('frontend/images/slider/5.PNG') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-catalogue">
                            <img src="{{ url('frontend/images/slider/6.PNG') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-catalogue">
                            <img src="{{ url('frontend/images/slider/7.PNG') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-catalogue">
                            <img src="{{ url('frontend/images/slider/8.PNG') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-catalogue">
                            <img src="{{ url('frontend/images/slider/10.PNG') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-catalogue">
                            <img src="{{ url('frontend/images/slider/10.PNG')}}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-catalogue">
                            <img src="{{ url('frontend/images/slider/MASSAGE OF JS.PNG')}}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection