@extends('layouts.web.app')
@section('page_title')@lang('site.home')@endsection
@section('content')
    <!-- Bnner Section -->
    <section class="banner-section style-three">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)

                    <!-- Slide Item -->
                    <div class="swiper-slide" style="background-image: url({{url('/thumbnail/1920/800/80/storage/slider_images/'.$slider->image)}});">
                        <div class="content-outer">
                            <div class="content-box justify-content-center">
                                <div class="inner text-center">
                                    <div class="logo"><img src="{{asset('storage/settings/'.setting('logo'))}}" alt=""></div>
                                    <h1>{{$slider->name}} </h1>
                                    <div class="link-box">
                                        <a href="{{$slider->button_url}}" class="theme-btn btn-style-ten"><span>{{$slider->button_name}}</span>
                                        </a>
                                        {{--<a href="#" class="theme-btn btn-style-eleven"><span>Recent Causes</span>
                                        </a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
            <div class="banner-slider-pagination style-four"></div>
            <div class="banner-slider-nav style-one">
                <div class="banner-slider-control banner-slider-button-prev"><span class="fa fa-angle-left"></span></div>
                <div class="banner-slider-control banner-slider-button-next"><span class="fa fa-angle-right"></span> </div>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h5>News & Updates</h5>
                <h1>Recent blog post</h1>
            </div>
            <div class="row">
                @foreach($blogs as $blog)

                    <!-- News Block Two -->
                    <div class="col-lg-4 news-block-two style-two">
                        <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                            <div class="image">
                                {{--<div class="category"><a href="#">Tips & Advice</a></div>--}}
                                <a href="{{route('blog.show',['blog'=>$blog->id,make_slug($blog->name)])}}"><img src="{{($blog->image ? url('/thumbnail/950/450/80/storage/blog_images/'.$blog->image) : url('/thumbnail/356/267/80/storage/settings/'.setting('logo')) )}}" alt=""></a>
                                {{--<div class="post-meta-info">
                                    <a href="#"><span class="flaticon-eye"></span>21</a>
                                    <a href="#"><span class="flaticon-comment"></span>08</a>
                                </div>--}}
                            </div>
                            <div class="lower-content">
                                <div class="date"><span class="flaticon-clock"></span>{{ $blog->created_at->format('Y-m-d') }}</div>
                                <h4><a href="{{route('blog.show',['blog'=>$blog->id,make_slug($blog->name)])}}">{{$blog->name}}</a></h4>
                                {{--<div class="author-info">
                                    <div class="image"><img src="images/resource/author-thumb-1.jpg" alt=""></div>
                                    <div class="author-title"><a href="#">Rubin Santro</a></div>
                                    <div class="share-icon style-two post-share-icon">
                                        <div class="share-btn"><img src="images/resource/dotted.png" alt=""></div>
                                        <ul>
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                        </ul>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
                <a href="#" class="theme-btn btn-style-twelve"><span>Donate for event</span></a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="fluid-container">
            <div class="wrapper-box">
                <div class="content-column">
                    <div class="sec-title light">
                        <h5>Our Gallery</h5>
                        <h1>Gallery of our works</h1>
                    </div>
                    <div class="link-btn"><a href="#"><span class="flaticon-next"></span>More from Gallery </a></div>
                </div>
                <div class="portfolio-column">
                    <div class="four-item-carousel owl-theme owl-carousel owl-nav-style-three owl-dots-none">
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="inner-box">
                                <div class="image"><img src="images/portfolio/1-1.jpg" alt=""></div>
                                <div class="overlay">
                                    <a data-fancybox="example gallery" href="images/portfolio/1-1.jpg" class="zoom-btn"><span>Zoom</span></a>
                                    <h4><a href="#">Clean Kamilo Beach</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="inner-box">
                                <div class="image"><img src="images/portfolio/1-2.jpg" alt=""></div>
                                <div class="overlay">
                                    <a data-fancybox="example gallery" href="images/portfolio/1-2.jpg" class="zoom-btn"><span>Zoom</span></a>
                                    <h4><a href="#">Clean Kamilo Beach</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="inner-box">
                                <div class="image"><img src="images/portfolio/1-3.jpg" alt=""></div>
                                <div class="overlay">
                                    <a data-fancybox="example gallery" href="images/portfolio/1-3.jpg" class="zoom-btn"><span>Zoom</span></a>
                                    <h4><a href="#">Clean Kamilo Beach</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="inner-box">
                                <div class="image"><img src="images/portfolio/1-4.jpg" alt=""></div>
                                <div class="overlay">
                                    <a data-fancybox="example gallery" href="images/portfolio/1-4.jpg" class="zoom-btn"><span>Zoom</span></a>
                                    <h4><a href="#">Clean Kamilo Beach</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="inner-box">
                                <div class="image"><img src="images/portfolio/1-1.jpg" alt=""></div>
                                <div class="overlay">
                                    <a data-fancybox="example gallery" href="images/portfolio/1-1.jpg" class="zoom-btn"><span>Zoom</span></a>
                                    <h4><a href="#">Clean Kamilo Beach</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="inner-box">
                                <div class="image"><img src="images/portfolio/1-2.jpg" alt=""></div>
                                <div class="overlay">
                                    <a data-fancybox="example gallery" href="images/portfolio/1-2.jpg" class="zoom-btn"><span>Zoom</span></a>
                                    <h4><a href="#">Clean Kamilo Beach</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="inner-box">
                                <div class="image"><img src="images/portfolio/1-3.jpg" alt=""></div>
                                <div class="overlay">
                                    <a data-fancybox="example gallery" href="images/portfolio/1-3.jpg" class="zoom-btn"><span>Zoom</span></a>
                                    <h4><a href="#">Clean Kamilo Beach</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="inner-box">
                                <div class="image"><img src="images/portfolio/1-4.jpg" alt=""></div>
                                <div class="overlay">
                                    <a data-fancybox="example gallery" href="images/portfolio/1-4.jpg" class="zoom-btn"><span>Zoom</span></a>
                                    <h4><a href="#">Clean Kamilo Beach</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
