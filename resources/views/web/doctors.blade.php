@extends('layouts.web.app')
@section('page_title')@lang('site.doctors')@endsection
@section('content')

    <div id="breadcrumb" class="division">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class=" breadcrumb-holder">

                        <!-- Breadcrumb Nav -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('/')}}">@lang('site.home')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@lang('site.doctors')</li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h4 class="h4-sm steelblue-color">@lang('site.doctors')</h4>

                    </div>
                </div>
            </div>  <!-- End row -->
        </div>	<!-- End container -->
    </div>
    <!-- END BREADCRUMB -->

    <!-- DOCTORS-3
    ============================================= -->
    <section id="doctors-3" class="bg-lightgrey wide-60 doctors-section division">
        <div class="container">
            <div class="row">
                @foreach($doctors as $doctor)
                    <div class="col-md-6 col-lg-4">
                    <div class="doctor-2">

                        <!-- Doctor Photo -->
                        <div class="hover-overlay">
                            <img class="img-fluid" src="{{url('/thumbnail/700/800/80/storage/doctor_images/'.($doctor->image ? $doctor->image : 'default.png'))}}" alt="doctor-foto">
                        </div>

                        <!-- Doctor Meta -->
                        <div class="doctor-meta">

                            <h5 class="h5-xs blue-color">{{$doctor->name}}</h5>
                            {{--<span>Chief Medical Officer</span>--}}

                            <!-- Button -->
                            <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{route('doctor_profile.show',['doctor'=>$doctor->id,'slug'=>make_slug($doctor->name)])}}" title="">@lang('site.view_profile')</a>

                        </div>

                    </div>
                </div>
                @endforeach
            </div>	    <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END DOCTORS-3 -->


@endsection
