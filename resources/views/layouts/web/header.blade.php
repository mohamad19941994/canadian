<header class="main-header style-two">
    <!-- Top bar -->
    <div class="top-bar style-two">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="left-content">
                    <div class="text">We only have what we give... <a href="#" class="donate-box-btn">Donate Now.</a></div>
                </div>
                <div class="right-content">
                    <ul class="contact-info">
                        <li><span class="flaticon-mail"></span><a href="mailto:support@charity.com">support@charity.com</a></li>
                        <li><span class="flaticon-phone"></span><a href="tel:+211456789">+211 456 789</a></li>
                    </ul>
                    <div class="language-switcher">
                        <div class="languages">
                            <span class="current" title="{{app()->getLocale()}}">{{app()->getLocale()}}</span>
                            <span class="hover">{{app()->getLocale()}}</span>
                            <ul>
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    @if(app()->getLocale() != $localeCode)
                                        <li><a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper style-two">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="logo-column">
                    <div class="logo-box">
                        <div class="logo"><a href="{{route('/')}}"><img src="{{asset('storage/settings/'.setting('logo'))}}" alt="" title=""></a></div>
                    </div>
                </div>
                <div class="right-column">
                    <div class="option-wrapper">
                        <div class="nav-outer">

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-xl navbar-dark">

                                <div class="collapse navbar-collapse">
                                    <ul class="navigation">
                                        <li class="current"><a href="{{route('/')}}">@lang('site.home')</a>
                                        </li>
                                        <li class="dropdown"><a href="{{route('about_us')}}">@lang('site.about_us')</a>
                                            <ul>
                                                <li><a href="{{route('bank_accounts')}}">@lang('site.bank_accounts')</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('blogs')}}">@lang('site.blogs')</a></li>
                                        <li><a href="{{route('kudus')}}">@lang('site.kudus')</a></li>
                                        <li><a href="{{route('contact_us')}}">@lang('site.contact_us')</a></li>
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->

                        </div>
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search...." required="">
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="cart-btn">
                            <div class="cart-icon"><span class="flaticon-bag"></span><span class="item-count">0</span></div>
                        </div>
                        <div class="navbar-btn-wrap">
                            <button class="anim-menu-btn">
                                <i class="flaticon-menu"></i>
                            </button>
                        </div>
                        <div class="link-btn">
                            <a href="#" class="theme-btn btn-style-four"><span>Volunteer</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--End Header Upper-->
    <div class="sticky-header style-two">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="logo-column">
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="images/logo-3.png" alt="" title=""></a></div>
                    </div>
                </div>
                <div class="menu-column">
                    <div class="nav-outer">

                        <div class="nav-inner">

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-xl navbar-dark">

                                <div class="collapse navbar-collapse">
                                    <ul class="navigation">
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu style-two">
        <div class="menu-box">
            <div class="logo"><a href="index.html"><img src="images/logo-3.png" alt=""></a></div>
            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-xl navbar-dark">
                <div class="navbar-header">
                    <!-- Toggle Button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="flaticon-menu"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navigation">

                    </ul>
                </div>
            </nav>
            <!-- Main Menu End-->
            <!--Search Box-->
            <div class="search-box-outer">
                <div class="dropdown">
                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu4">
                        <li class="panel-outer">
                            <div class="form-container">
                                <form method="post" action="blog.html">
                                    <div class="form-group">
                                        <input type="search" name="field-name" value="" placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- End Mobile Menu -->

    <div class="nav-overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
</header>
