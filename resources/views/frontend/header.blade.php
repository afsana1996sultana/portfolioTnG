<header id="site-header" class="site-header sticky-header header-static">
    <!-- Main Header start -->
    <div class="header-topbar style-2">
        <div class="octf-area-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 col-12">
                        <ul class="social-list">
                            <li><a href="https://www.youtube.com/@tngplus" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=61559403624796&mibextid=ZbWKwL" target="_blank" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="" target="_blank" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12 col-12">
                        <ul class="topbar-info align-self-end clearfix">
                            <li><a href="tel:+8801310997311"><i class="fa fa-phone"></i>+8801310997311</a></li>
                            <li><a href="mailto:tngpluselectric@gmail.com"><i class="fa fa-envelope"></i>tngpluselectric@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="octf-main-header">
        <div class="octf-area-wrap">
            <div class="container octf-mainbar-container">
                <div class="octf-mainbar">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col logo-col">
                            <div id="site-logo" class="site-logo">
                                @foreach ($frontlogo as $val)
                                <a href="{{url('/')}}">
                                    <img src="{{ asset('img/' . $val->logo_img) }}" alt="TNGPlus Electric" class="logo">
                                </a>
                                @endforeach
                            </div>
                        </div>
                         <div class="octf-col menu-col">
                            <nav id="site-navigation" class="main-navigation">
                                <ul class="menu">
                                    <li><a href="{{url('/home')}}">HOME</a></li>
                                    @foreach ($menu as $mainMenu)
                                        @php
                                            $subMenu = \App\Models\Submenu::where('menu_id', $mainMenu->id)->get();
                                        @endphp

                                        <li class="{{ $subMenu->count() > 0 ? 'menu-item-has-children' : '' }}">
                                            <a href="#">{{ $mainMenu->m_name }}
                                                {{-- @if ($subMenu->count() > 0)
                                                    <i class="fa fa-chevron-down" style="font-size: 9px;" aria-hidden="true"></i>
                                                @endif --}}
                                            </a>
                                            @if ($subMenu->count() > 0)
                                                <ul class="sub-menu mega">
                                                    @foreach ($subMenu as $submenu)
                                                    <li>
                                                        <a>
                                                            {{ $submenu->submenu_name }}
                                                            @php
                                                                $childMenu = \App\Models\Childmenu::where('submenu_id', $submenu->id)->get();
                                                            @endphp
                                                            @if ($childMenu->isNotEmpty())
                                                                <i class="fa fa-chevron-right" style="font-size: 9px;" aria-hidden="true"></i>
                                                            @endif
                                                        </a>

                                                        @if ($childMenu->count() > 0)
                                                            <ul class="child-menu mega">
                                                                @foreach ($childMenu as $childmenu)
                                                                    <li>
                                                                        <a href="{{ route('childmenu.products', ['id' => $childmenu->id]) }}">{{ $childmenu->childmenu_name }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                    <li>
                                        <a href=#>DEALERSHIP</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('/dealer-apply-from')}}">Apply a Dealer</a></li>
                                            <li><a href="{{url('/faq')}}">DEALERSHIP FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/contact')}}">CONTACT</a></li>
                                    <li><a href="{{url('/about')}}">ABOUT US</a></li>
                                    <li><a href="{{url('/gallery')}}">GALLERY</a></li>
                                    <li><a href="{{url('/branch')}}">OUR BRANCH</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_mobile">
        <div class="container">
            <div class="mlogo_wrapper clearfix">
                <div class="mobile_logo">
                    @foreach ($frontlogo as $val)
                    <a href="{{url('/')}}">
                        <img src="{{ asset('img/' . $val->logo_img) }}" alt="Markwrapper">
                    </a>
                    @endforeach
                </div>
                <div id="mmenu_toggle">
                    <button></button>
                </div>
            </div>
            <div class="mmenu_wrapper">
                <div class="mobile_nav collapse">
                    <ul id="menu-main-menu" class="mobile_mainmenu">
                        <li><a href="{{url('/home')}}">HOME</a></li>
                        @foreach ($menu as $mainMenu)
                            @php
                                $subMenu = \App\Models\Submenu::where('menu_id', $mainMenu->id)->get();
                            @endphp

                            <li class="{{ $subMenu->count() > 0 ? 'menu-item-has-children' : '' }}">
                                <a href="#">{{ $mainMenu->m_name }}
                                </a>
                                @if ($subMenu->count() > 0)
                                    <ul class="sub-menu">
                                        @foreach ($subMenu as $submenu)
                                        <li>
                                            <a>
                                                {{ $submenu->submenu_name }}
                                                @php
                                                    $childMenu = \App\Models\Childmenu::where('submenu_id', $submenu->id)->get();
                                                @endphp
                                            </a>

                                            @if ($childMenu->count() > 0)
                                                <ul class="child-menu">
                                                    @foreach ($childMenu as $childmenu)
                                                        <li>
                                                            <a href="{{ route('childmenu.products', ['id' => $childmenu->id]) }}">{{ $childmenu->childmenu_name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                        <li>
                            <a href=#>DEALERSHIP</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('/dealer-apply-from')}}">Apply a Dealer</a></li>
                                <li><a href="{{url('/faq')}}">DEALERSHIP FAQ</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/contact')}}">CONTACT</a></li>
                        <li><a href="{{url('/about')}}">ABOUT US</a></li>
                        <li><a href="{{url('/gallery')}}">GALLERY</a></li>
                        <li><a href="{{url('/branch')}}">OUR BRANCH</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    .main-navigation>ul>li {
        position: initial;
    }

</style>