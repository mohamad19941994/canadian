@extends('layouts.web.app')
@section('page_title')@lang('site.404')@endsection
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
                                <li class="breadcrumb-item active" aria-current="page">@lang('site.404')</li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h4 class="h4-sm steelblue-color">@lang('site.404')</h4>

                    </div>
                </div>
            </div>  <!-- End row -->
        </div>	<!-- End container -->
    </div>	<!-- END BREADCRUMB -->

    <!-- INFO-4
    ============================================= -->
    <section id="info-4" class="wide-100 info-section division" style="text-align: center">
        <div class="container">


            <!-- TOP ROW -->
            <div class="top-row mb-80">
                <div class="row d-flex align-items-center">
                    <!-- INFO TEXT -->
                    <div class="col-lg-12">
                        <div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Title -->
                            <h3 class="h3-md steelblue-color">@lang('site.404')</h3>
                            <a href="{{route('/')}}" class="btn btn-blue blue-hover">عودة للصفحة الرئيسية</a>
                        </div>
                    </div>	<!-- END TEXT BLOCK -->

                </div>    <!-- End row -->
            </div>	<!-- END TOP ROW -->


        </div>	   <!-- End container -->
    </section>	<!-- END INFO-4 -->


@endsection
