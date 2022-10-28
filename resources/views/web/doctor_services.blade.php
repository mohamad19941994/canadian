@extends('layouts.web.app')
@section('page_title'){{$service->name}}@endsection
@section('content')

    <!-- SERVICES-5
			============================================= -->
    {{--<section id="services-5" class="bg-lightgrey wide-100 services-section division">
        <div class="container-fluid">
            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">
                    <!-- Title 	-->
                    <h3 class="h3-md steelblue-color">معرض صور {{$service->name}}</h3>
                </div>
            </div>

            <!-- SERVICES CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme services-holder">
                        <div class="sbox-5 my_style">
                            <div class="gallery-item">
                                <div class="hover-overlay">

                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="{{asset('web/images/gallery/image-1.jpg')}}" alt="gallery-image">
                                    <div class="item-overlay"></div>

                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="{{asset('web/images/gallery/image-1.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="sbox-5 my_style">
                            <div class="gallery-item">
                                <div class="hover-overlay">

                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="{{asset('web/images/gallery/image-2.jpg')}}" alt="gallery-image">
                                    <div class="item-overlay"></div>

                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="{{asset('web/images/gallery/image-2.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="sbox-5 my_style">
                            <div class="gallery-item">
                                <div class="hover-overlay">

                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="{{asset('web/images/gallery/image-3.jpg')}}" alt="gallery-image">
                                    <div class="item-overlay"></div>

                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="{{asset('web/images/gallery/image-3.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="sbox-5 my_style">
                            <div class="gallery-item">
                                <div class="hover-overlay">

                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="{{asset('web/images/gallery/image-4.jpg')}}" alt="gallery-image">
                                    <div class="item-overlay"></div>

                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="{{asset('web/images/gallery/image-4.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="sbox-5 my_style">
                            <div class="gallery-item">
                                <div class="hover-overlay">

                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="{{asset('web/images/gallery/image-5.jpg')}}" alt="gallery-image">
                                    <div class="item-overlay"></div>

                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="{{asset('web/images/gallery/image-5.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	<!-- END SERVICES CONTENT -->


        </div>	   <!-- End container -->
    </section>--}}	 <!-- END SERVICES-5 -->

    <!-- SERVICE DETAILS
			============================================= -->
    {{--<div id="service-page" class=" wide-60 service-page-section division">
        <div class="container">


            <!-- TEXT -->
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="s1-page content-block text-center">

                        {!! $service->description !!}

                    </div>
                </div>
            </div>  <!-- End row -->

        </div>	<!-- End container -->
    </div>--}}	<!-- END SERVICE DETAILS -->



    <section id="services-7" class="bg-lightgrey wide-70 servicess-section division">
        <div class="container">
            <div class="row">


                <!-- SERVICE BOXES -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 section-title">
                            <h3 class="h3-md steelblue-color">دكاترة الخدمة</h3>
                        </div>

                        @foreach($doctors as $doctor)
                            <div class="col-md-6">
                                <div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    <!-- Icon -->
                                    <span class="flaticon-137-doctor blue-color"></span>

                                    {{--<span><img src="{{url('/thumbnail/52/52/80/storage/doctor_images/'.$doctor->image)}}" alt=""></span>--}}

                                    <!-- Text -->
                                    <div class="sbox-7-txt">

                                        <!-- Title -->
                                        <h5 class="h5-sm steelblue-color">{{$doctor->name}}</h5>
                                        <!-- Text -->
                                        {{--<p class="p-sm">{{$d_service->description}}
                                        </p><br>--}}<br>
                                        <a href="{{route('doctor_profile.show',['doctor'=>$doctor->id,'slug'=>make_slug($doctor->name)])}}" class="btn btn-blue blue-hover">@lang('site.make_appointment')</a>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>	<!-- END SERVICE BOXES -->


            </div>    <!-- End row -->
        </div>	   <!-- End container -->
    </section>

@endsection
