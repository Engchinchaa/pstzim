<div id="pre-load">
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="loader-icon">
                <img src="{{ asset('assets/uploads/88.png') }}" alt="Pst Zem - Construction & Building Html Template">
            </div>
        </div>
    </div>
</div>

<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Toolbar Area Start -->
        <div class="toolbar-area topbar-style1 hidden-md">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-7">
                        <div class="toolbar-contact">
                            <ul class="rs-contact-info">
                                <li>
                                    <i class="fi fi-rr-envelope-plus"></i>
                                    <a href="mailto:info@pstzem.com">info@pstzem.com</a>
                                </li>
                                <li>
                                    <i class="fi fi-rr-phone-call"></i>
                                    <a href="tel:(+255)774-440-745"> (+255) 774-440-745</a>
                                </li>
                                <li>
                                    <i class="fi fi-rr-map-marker-home"></i>
                                    Darajabovu Karakana Zanzibar
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="toolbar-sl-share">
                            <ul class="clearfix">
                                <li class="opening"><em><i class="fi fi-rr-time-add"></i> Hours: Mon-Fri: 9.00 am - 7.00 pm</em></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar Area End -->

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row-table">
                    <div class="col-cell header-logo">
                        <div class="logo-area">
                            <a href="index.html">
                                <img class="normal-logo" src="{{ asset('assets/uploads/55.png') }}" alt="logo">
                                <img class="sticky-logo" src="{{ asset('assets/uploads/55.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <nav class="rs-menu hidden-md">
                                    <ul class="nav-menu">
                                        <li class="{{ request()->routeIs('home') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="{{ request()->routeIs('about') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('about') }}">About</a>
                                        </li>
                                        <li class="{{ request()->routeIs('services') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('services') }}">Services</a>
                                        </li>
                                        <li class="{{ request()->routeIs('projects') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('projects') }}">Projects</a>
                                        </li>
                                        <li class="{{ request()->routeIs('blog') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('blog') }}">Blog</a>
                                        </li>
                                        <li class="{{ request()->routeIs('contact') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="expand-btn-inner">
                            <ul>
                                <li class="search-parent">
                                    <a class="hidden-xs rs-search" href="#">
                                        <i class="fi fi-rr-search"></i>
                                    </a>
                                    <div class="sticky_form">
                                        <form role="search" class="bs-search search-form" method="get">
                                            <div class="search-wrap">
                                                <label class="screen-reader-text active">Search for:</label>
                                                <input type="search" placeholder="Searching..." name="s" class="search-input">
                                                <button type="submit"><i class="fi fi-rr-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="btn-quote"><a class="quote-button" href="#">Let's Talk</a></li>
                                <li class="humburger">
                                    <a id="nav-expander" class="nav-expander bar" href="#">
                                        <div class="bar">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                            <span class="dot4"></span>
                                            <span class="dot5"></span>
                                            <span class="dot6"></span>
                                            <span class="dot7"></span>
                                            <span class="dot8"></span>
                                            <span class="dot9"></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
            <div class="close-btn">
                <a id="nav-close2" class="nav-close">
                    <div class="line">
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </div>
                </a>
            </div>
            <ul class="nav-menu">
                <li class="{{ request()->routeIs('home') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="{{ request()->routeIs('about') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li class="{{ request()->routeIs('services') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('services') }}">Services</a>
                </li>
                <li class="{{ request()->routeIs('projects') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('projects') }}">Projects</a>
                </li>
                <li class="{{ request()->routeIs('blog') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="{{ request()->routeIs('contact') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </nav>
        <!-- Canvas Menu end -->
    </header>
</div>
