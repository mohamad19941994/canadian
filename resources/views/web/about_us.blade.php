@extends('layouts.web.app')
@section('page_title')@lang('site.about_us')@endsection
@section('content')

    <!-- BREADCRUMB
			============================================= -->
    <div id="breadcrumb" class="division">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class=" breadcrumb-holder">

                        <!-- Breadcrumb Nav -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('/')}}">@lang('site.home')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@lang('site.about_us')</li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h4 class="h4-sm steelblue-color">@lang('site.about_us')</h4>

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
                            <img class="img-fluid my_border_radius" src="{{asset('web/images/chief_doctor_700x800.jpg')}}" alt="info-image">
                        </div>
                    </div>


                    <!-- INFO TEXT -->
                    <div class="col-lg-6">
                        <div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

                            <!-- Section ID -->
                            <span class="section-id blue-color">هذا النص هو مثال</span>

                            <!-- Title -->
                            <h3 class="h3-md steelblue-color">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</h3>

                            <!-- Text -->
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                            </p>

                            <!-- Text -->
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                            </p>

                            <!-- Singnature -->
                            <div class="singnature mt-35">

                                <!-- Text -->
                                <p class="p-small mb-15">هذا النص هو مثال</p>

                                <!-- Singnature Image -->
                                <!-- Recommended sizes for Retina Ready displays is 400x68px; -->
                                {{--<img class="img-fluid" src="{{asset('web/images/signature.png')}}" width="200" height="34" alt="signature-image" />--}}

                            </div>

                        </div>
                    </div>	<!-- END TEXT BLOCK -->


                </div>    <!-- End row -->
            </div>	<!-- END TOP ROW -->


            <!-- BOTTOM ROW -->
            <div class="bottom-row">
                <div class="row d-flex align-items-center">


                    <!-- INFO TEXT -->
                    <div class="col-lg-6">
                        <div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

                            <!-- Section ID -->
                            <span class="section-id blue-color">هذا النص هو مثال</span>

                            <!-- Title -->
                            <h3 class="h3-md steelblue-color">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</h3>

                            <!-- Text -->
                            <p class="mb-30">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
                            </p>

                            <!-- Options List -->
                            <div class="row">

                                <div class="col-xl-6">

                                    <!-- Option #1 -->
                                    <div class="box-list">
                                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                        <p class="p-sm">هذا النص هو مثال</p>
                                    </div>

                                    <!-- Option #2 -->
                                    <div class="box-list">
                                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                        <p class="p-sm">هذا النص هو مثال</p>
                                    </div>

                                    <!-- Option #3 -->
                                    <div class="box-list">
                                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                        <p class="p-sm">هذا النص هو مثال</p>
                                    </div>

                                </div>

                                <div class="col-xl-6">

                                    <!-- Option #4 -->
                                    <div class="box-list">
                                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                        <p class="p-sm">هذا النص هو مثال</p>
                                    </div>

                                    <!-- Option #5 -->
                                    <div class="box-list">
                                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                        <p class="p-sm">هذا النص هو مثال</p>
                                    </div>

                                    <!-- Option #6 -->
                                    <div class="box-list">
                                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                        <p class="p-sm">هذا النص هو مثال</p>
                                    </div>

                                </div>

                            </div>	<!-- End Options List -->

                        </div>
                    </div>	<!-- END INFO TEXT -->


                    <!-- INFO IMAGE -->
                    <div class="col-lg-6">
                        <div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
                            <img class="img-fluid my_border_radius" src="{{asset('web/images/emergency_help_700x800.jpg')}}" alt="info-image">
                        </div>
                    </div>


                </div>    <!-- End row -->
            </div>	<!-- END BOTTOM ROW -->


        </div>	   <!-- End container -->
    </section>	<!-- END INFO-4 -->


    <!-- VIDEO-2
    ============================================= -->
    <section id="video-2" class="wide-60 video-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- VIDEO LINK -->
                <div class="col-lg-6">
                    <div class="video-preview mb-40 text-center wow fadeInUp" data-wow-delay="0.6s">

                        <!-- Change the link HERE!!! -->
                        <a class="video-popup1" href="https://www.youtube.com/embed/SZEflIVnhH8">

                            <!-- Play Icon -->
                            <div class="video-btn play-icon-blue">
                                <div class="video-block-wrapper">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>

                            <!-- Preview -->
                            <img class="img-fluid my_border_radius" src="{{asset('web/images/video-1.png')}}" alt="video-photo" />

                        </a>

                    </div>
                </div>	<!-- END VIDEO LINK -->


                <!-- VIDEO TEXT -->
                <div class="col-lg-6">
                    <div class="txt-block pc-30 mb-40 wow fadeInUp" data-wow-delay="0.4s">

                        <!-- Section ID -->
                        <span class="section-id blue-color">هذا النص هو مثال</span>

                        <!-- Title -->
                        <h3 class="h3-md steelblue-color">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</h3>

                        <!-- CONTENT BOX #1 -->
                        <div class="box-list m-top-15">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى
                            </p>
                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى
                            </p>
                        </div>

                        <!-- CONTENT BOX #3 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى
                            </p>
                        </div>

                    </div>
                </div>


            </div>	    <!-- End row -->
        </div>	    <!-- End container -->
    </section>	 <!-- END VIDEO-2 -->




    <!-- SERVICES-7
    ============================================= -->
    <section id="services-7" class="bg-lightgrey wide-70 servicess-section division">
        <div class="container">
            <div class="row">


                <!-- SERVICE BOXES -->
                <div class="col-lg-7">
                    <div class="row">

                        @foreach($doctor_categories as $d_category)


                            <div class="col-md-6">
                            <div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.4s">
                                <a href="{{route('service.show',['category'=>$d_category->id,'slug'=>make_slug($d_category->name)])}}">

                                    <!-- Icon -->
                                    {{--<span class="flaticon-137-doctor blue-color"></span>--}}
                                    <span><img src="{{url('/thumbnail/52/52/80/storage/doctor_category_images/'.$d_category->image)}}" alt=""></span>

                                    <!-- Text -->
                                    <div class="sbox-7-txt">

                                        <!-- Title -->
                                        <h5 class="h5-sm steelblue-color">{{$d_category->name}}</h5>

                                        <!-- Text -->
                                        <p class="p-sm">{!! \Illuminate\Support\Str::words(strip_tags($d_category->description),15) !!}
                                        </p>

                                    </div>

                                </a>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>	<!-- END SERVICE BOXES -->


                <!-- INFO TABLE -->
                <div class="col-lg-5">
                    <div class="services-7-table blue-table mb-30 wow fadeInUp" data-wow-delay="0.6s">

                        <!-- Title -->
                        <h4 class="h4-xs">@lang('site.working_hours'):</h4>

                        <!-- Text -->
                        <p class="p-sm">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى
                        </p>

                        <!-- Table -->
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>@lang('site.sat_fri')</td>
                                <td> - </td>
                                <td class="text-right">@lang('site.sat_fri_time')</td>
                            </tr>
                            <tr>
                                <td>@lang('site.fri')</td>
                                <td> - </td>
                                <td class="text-right">@lang('site.fri_time')</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>	<!-- END INFO TABLE -->


            </div>    <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END SERVICES-7 -->




    <!-- BANNER-5
    ============================================= -->
    <section id="banner-5" class="pt-100 banner-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">

                    <!-- Title 	-->
                    <h3 class="h3-md steelblue-color">هذا النص هو مثال لنص</h3>

                    <!-- Text -->
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة
                    </p>

                </div>
            </div>


            <!-- BANNER IMAGE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-5-img wow fadeInUp" data-wow-delay="0.4s">
                        <img class="img-fluid" src="{{asset('web/images/image-07.png')}}" alt="banner-image" />
                    </div>
                </div>
            </div>


        </div>	   <!-- End container -->
    </section>	<!-- END BANNER-5 -->

@endsection
