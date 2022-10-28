<!DOCTYPE html>
<html lang="{{(LaravelLocalization::getCurrentLocale() == 'ar' ? 'ar' : 'en')}}" dir="{{(LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl' : 'ltr')}}">
<head>
    <meta charset="utf-8">
    <title>Goodsoul HTML Template</title>

    <link rel="shortcut icon" href="{{asset('web/images/favicon-3.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('web/images/favicon-3.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Prata|Rubik:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{asset('web/css/bootstrap'.(app()->getLocale() == 'ar' ? '_rtl': '').'.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/custom-animate.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/owl.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/style'.(app()->getLocale() == 'ar' ? '_rtl': '').'.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/responsive'.(app()->getLocale() == 'ar' ? '_rtl': '').'.css')}}" rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('web/js/respond.js')}}"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader style-three"></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

    <!-- Main Header-->
    @include('layouts.web.header')
    <!-- End Main Header -->

    @yield('content')

    <!-- Main Footer -->
    @include('layouts.web.footer')

    <div id="donate-popup" class="donate-popup style-three">

        <div class="popup-overlay"></div>

        <div class="donate-form-area">
            <div class="donate-form-wrapper">
                <div class="close-donate theme-btn"><span class="flaticon-close"></span></div>
                <div class="sec-title text-center">
                    <h1>Donate us to achive our goal</h1>
                    <div class="text">Beguiled and demoralized by the charms of pleasure of the moment, so by desire, <br>that they cannot foresee.</div>
                </div>

                <form  action="#" class="donate-form default-form">
                    <ul class="chicklet-list clearfix">
                        <li>
                            <input type="radio" id="donate-amount-1" name="donate-amount" />
                            <label for="donate-amount-1" data-amount="10" >$10</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                            <label for="donate-amount-2" data-amount="20">$20</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-3" name="donate-amount" />
                            <label for="donate-amount-3" data-amount="50">$50</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-4" name="donate-amount" />
                            <label for="donate-amount-4" data-amount="100">$100</label>
                        </li>
                        <li class="other-amount">

                            <div class="input-container" data-message="Every dollar you donate helps end hunger."><input type="text" id="other-amount" placeholder="Other Amount"  />
                            </div>
                        </li>
                    </ul>

                    <h3>Donor Information</h3>

                    <div class="contact-form">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="fname" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="fname" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="fname" placeholder="Contact">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="filters-selec form-controlt selectmenu" name="form_subject">
                                        <option value="*">Payment Via</option>
                                        <option value=".category-1">Cash</option>
                                        <option value=".category-2">Card</option>
                                        <option value=".category-2">Bank Transfer</option>
                                        <option value=".category-2">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <button class="theme-btn btn-style-one" type="submit"><span>Donate Now</span></button>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                            <span>I would like to donate automatically repeat each month</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
<!--End pagewrapper-->



<!-- JS -->
<script src="{{asset('web/js/jquery.js')}}"></script>
<script src="{{asset('web/js/popper.min.js')}}"></script>
<script src="{{asset('web/js/bootstrap.min.js')}}"></script>
<script src="{{asset('web/js/TweenMax.min.js')}}"></script>
<script src="{{asset('web/js/wow.js')}}"></script>
<script src="{{asset('web/js/owl.js')}}"></script>
<script src="{{asset('web/js/appear.js')}}"></script>
<script src="{{asset('web/js/swiper.min.js')}}"></script>
<script src="{{asset('web/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('web/js/menu-nav-btn.js')}}"></script>
<script src="{{asset('web/js/jquery-ui.js')}}"></script>
<script src="{{asset('web/js/jquery.countdown.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('web/js/script'.(app()->getLocale() == 'ar' ? '_rtl': '').'.js')}}"></script>

</body>
</html>
