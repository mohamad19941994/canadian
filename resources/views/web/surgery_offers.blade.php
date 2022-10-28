<!DOCTYPE html>
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{(LaravelLocalization::getCurrentLocale() == 'ar' ? 'ar' : 'en')}}" dir="{{(LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl' : 'ltr')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="@lang('site.author')">
    <meta name="description" content="@if(setting(app()->getLocale())['description']) {{setting(app()->getLocale())['description']}} @else @lang('site.site_description') @endif">
    <meta name="keywords" content="@if(setting(app()->getLocale())['site_keywords']) {{setting(app()->getLocale())['site_keywords']}} @else @lang('site.site_keywords') @endif"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="ar"/>
    <meta property="og:site_name" content="@lang('site.app')"/>
    <meta http-equiv="Expires" content="604800">
    <meta http-equiv="Pragma" content="public">
    <meta http-equiv="Cache-Control" content="public">
    <!-- SITE TITLE -->
    <title>@if(setting(app()->getLocale())['title']){{setting(app()->getLocale())['title']}}@else@lang('site.title')@endif - @lang('site.surgery_offers')</title>
    @yield('post_head')
    <!-- FAVICON AND TOUCH ICONS  -->
    <link rel="shortcut icon" href="{{ Storage::url('settings/' . setting('fav_icon')) }}" type="image/x-icon">
    <link rel="icon" href="{{ Storage::url('settings/' . setting('fav_icon')) }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('web/images/apple-touch-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('web/images/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('web/images/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" href="{{asset('web/images/apple-touch-icon.png')}}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
    <link href="{{asset('web/css/flaticon.css')}}" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link id="effect" href="{{asset('web/css/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
    <link href="{{asset('web/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/jquery.datetimepicker.min.css')}}" rel="stylesheet">

    @if(app()->getLocale() == 'ar')
        <!-- BOOTSTRAP CSS -->
        <link href="{{asset('web/css/bootstrap-rtl.min.css')}}" rel="stylesheet">
        <link href="{{asset('web/css/menu-rtl.css')}}" rel="stylesheet">
        <!-- TEMPLATE CSS -->
        <link href="{{asset('web/css/style-rtl.css')}}?id=2" rel="stylesheet">
        <!-- RESPONSIVE CSS -->
        <link href="{{asset('web/css/responsive-rtl.css')}}" rel="stylesheet">
        <link href="{{asset('web/css/timetable-rtl.css')}}" rel="stylesheet">
    @else
        <link href="{{asset('web/css/menu.css')}}" rel="stylesheet">
        <!-- BOOTSTRAP CSS -->
        <link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- TEMPLATE CSS -->
        <link href="{{asset('web/css/style.css')}}" rel="stylesheet">
        <!-- RESPONSIVE CSS -->
        <link href="{{asset('web/css/responsive.css')}}" rel="stylesheet">
        <link href="{{asset('web/css/timetable.css')}}" rel="stylesheet">
    @endif
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
    <!-- RESPONSIVE CSS -->
    <link href="{{asset('web/css/custom.css')}}?id=1" rel="stylesheet">

</head>

<body>
<a href="https://bit.ly/3CV5lCm" class="whatsapp-float"><img width="40" src="{{asset('img/whatsapp.png')}}"></a>
<a href="tel:966530008734" class="phone-float"><img width="37" src="{{asset('img/phone.png')}}"></a>
<!-- PRELOADER SPINNER
============================================= -->
<div id="loader-wrapper">
    <div id="loader"><div class="loader-inner"></div></div>
</div>

<!-- PAGE CONTENT
============================================= -->
<div id="page" class="page">

    @include('layouts.web.header')

    <!-- BREADCRUMB
			============================================= -->
    <div id="breadcrumb" class="division">
        <div class="container" id="landing-sent">
            <div class="row">
                <div class="col">
                    <div class=" breadcrumb-holder">

                        <!-- Breadcrumb Nav -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('/')}}">@lang('site.home')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@lang('site.surgery_offers')</li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h4 class="h4-sm steelblue-color">@lang('site.surgery_offers')</h4>

                    </div>
                </div>
            </div>  <!-- End row -->
        </div>	<!-- End container -->
    </div>	<!-- END BREADCRUMB -->

    <!-- INFO-4
    ============================================= -->
    <section id="info-4" class="wide-100 info-section division">
        <div class="container">
            <!-- TOP ROW -->
            <div class="top-row mb-80">
                <div class="row d-flex align-items-center">
                    <!-- INFO IMAGE -->
                    <div class="col-lg-6">
                        <div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
                            <img class="img-fluid my_border_radius" src="{{url('/thumbnail/900/900/80/storage/settings/'.setting('surgery_offers'))}}" alt="info-image">
                        </div>
                    </div>
                    <!-- INFO TEXT -->
                    <div class="col-lg-6">
                        <div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">
                            <!-- CONTACT FORM -->
                            @if(session('contact_success'))

                                <div class="alert alert-success fade show" role="alert">
                                    <div class="alert-icon"></div>
                                    <div class="alert-text">@lang('site.success')</div>
                                </div>
                            @endif
                            <div class=" mb-40" >
                                <form name="" class="row contact-form" action="{{ route('landing.post') }}#landing-sent" method="POST">
                                    <input type="hidden" name="type" value="surgery-offers">
                                    {{ csrf_field() }}
                                    <!-- Contact Form Input -->
                                    <div  class="col-md-12 col-lg-12" >
                                        <input type="text" name="name" class="form-control " placeholder="@lang('site.name')" required>
                                        @if ($errors->has('name'))
                                            <span style="color: red" class="error">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div  class="col-md-12 col-lg-12">
                                        <input type="text" name="phone" class="form-control " placeholder="@lang('site.phone')" required>
                                        @if ($errors->has('phone'))
                                            <span style="color: red" class="error">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>

                                    <!-- Form Select -->
                                    <div  class="col-md-12 col-lg-12">
                                        <select id="inlineFormCustomSelect3" name="service" class="custom-select " required>
                                            <option value="">@lang('site.service_type')</option>
                                            <option value="surgery_offers_1">@lang('site.surgery_offers_1')</option>
                                            <option value="surgery_offers_2">@lang('site.surgery_offers_2')</option>
                                            <option value="surgery_offers_3">@lang('site.surgery_offers_3')</option>
                                            <option value="surgery_offers_4">@lang('site.surgery_offers_4')</option>
                                            <option value="surgery_offers_5">@lang('site.surgery_offers_5')</option>
                                            <option value="surgery_offers_6">@lang('site.surgery_offers_6')</option>
                                        </select>
                                    </div>

                                    <!-- Contact Form Button -->
                                    <div class="col-lg-12 mt-15 ">
                                        <button type="submit" class="btn btn-blue blue-hover ">@lang('site.send')</button>
                                    </div>



                                </form>

                            </div>
                            <!-- END CONTACT FORM -->
                        </div>
                    </div>	<!-- END TEXT BLOCK -->
                </div>    <!-- End row -->
            </div>	<!-- END TOP ROW -->
        </div>	   <!-- End container -->
    </section>	<!-- END INFO-4 -->

    @include('layouts.web.footer')

</div>	<!-- END PAGE CONTENT -->

<!-- EXTERNAL SCRIPTS
============================================= -->
<script src="{{asset('web/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('web/js/bootstrap.min.js')}}"></script>
<script src="{{asset('web/js/modernizr.custom.js')}}"></script>
<script src="{{asset('web/js/jquery.easing.js')}}"></script>
<script src="{{asset('web/js/jquery.appear.js')}}"></script>
<script src="{{asset('web/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('web/js/menu.js')}}"></script>
<script src="{{asset('web/js/sticky.js')}}"></script>
<script src="{{asset('web/js/jquery.scrollto.js')}}"></script>
<script src="{{asset('web/js/materialize.js')}}"></script>
<script src="{{asset('web/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('web/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('web/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('web/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('web/js/hero-form.js')}}"></script>
<script src="{{asset('web/js/contact-form.js')}}"></script>
<script src="{{asset('web/js/comment-form.js')}}"></script>
<script src="{{asset('web/js/appointment-form.js')}}"></script>
<script src="{{asset('web/js/jquery.datetimepicker.full.js')}}"></script>
<script src="{{asset('web/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('web/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('web/js/wow.js')}}"></script>
<!-- Custom Script -->
<script src="{{asset('web/js/custom.js')}}?id=1"></script>

<script>
    new WOW().init();
</script>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!-- [if lt IE 9]>
<script src="{{asset('web/js/html5shiv.js')}}" type="text/javascript"></script>
<script src="{{asset('web/js/respond.min.js')}}" type="text/javascript"></script>
<![endif] -->
<!-- GetButton.io widget -->

<!-- /GetButton.io widget -->
<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
<!--
<script>
    window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
-->
<!-- End Google Analytics -->
@yield('script')
</body>

</html>


