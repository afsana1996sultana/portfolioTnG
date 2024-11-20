<footer id="site-footer" class="site-footer footer-v1">
    <div class="container" style="margin-top: -70px; margin-bottom: -35px;">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="widget-footer">
                    <h4 style="color: #bbbbbb; font-size: 14px !important;">Head Office</h4>
                    <strong style="font-size: 14px !important;">Address:</strong><span style="font-size: 14px !important;"> 417, Nurpur, World Touch Shopping Complex, Jia Soroni Road,
                        Donia Dhaka-1236</span><br>
                    <strong style="font-size: 14px !important;">Phone:</strong> +8801310-997311 <br>
                    <strong style="font-size: 14px !important;">Email:</strong> tngpluselectric@gmail.com <br>
                    <strong style="font-size: 14px !important;">Time:</strong> Sat-Thu 10.00AM To 07.00PM(Friday Closed)
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="widget-footer">
                    <h4 style="color: #bbbbbb; font-size: 14px !important;">Corporate Office</h4>
                    <strong style="font-size: 14px !important;">Address:</strong><span style="font-size: 14px !important;"> 124,BCC Road, Ibrahim Electric & Electronics Market, Nawabpur
                        Dhaka-1203</span><br>
                    <strong style="font-size: 14px !important;">Phone:</strong> +8801721-893262 & +8801315-684240 <br>
                    <strong style="font-size: 14px !important;">Email:</strong> tngpluselectric@gmail.com <br>
                    <strong style="font-size: 14px !important;">Time:</strong> Sat-Thu 10.00AM To 07.00PM(Friday Closed)
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="widget-footer">
                    <img src="{{ url('frontend/images/logo.png') }}" height="190px" width="200px" alt="TNGPlus Electric" class="lazyloaded" data-ll-status="loaded">
                    <p class="copyright-text" style="font-size: 14px !important;">All Rights Reserved © 2024 by TNGPlus Electric.</p>
                    <form id="ajaxnewsletter" class="mc4wp-form mc4wp-form-1343 pt-3" enctype="multipart/form-data" method="post" action="{{url('newsletter_store')}}">
                        @csrf
                        <div class="mc4wp-form-fields">
                            <div class="subscribe-inner-form">
                                <input type="email" name="txtEmail" id="txtEmail" value="" placeholder="Your Email" required>
                                <button type="submit" id="snd_newsletter" class="subscribe-btn-icon"><i class="flaticon-telegram"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mt-20">
             <div class="col-md-12 text-center text-md-center align-self-center">
                <p class="developer-text" style="font-size: 14px !important;">Developed by: <a target="_blank" href="#" style="color: #ffffff !important; font-size: 14px !important;">Code House IT</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</footer>
