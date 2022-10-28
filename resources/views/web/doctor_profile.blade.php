@extends('layouts.web.app')
@section('page_title'){{$doctor->name}}@endsection
@section('post_head')
    <style>
        ul{
            list-style: disc !important;
        }
    </style>
@endsection
@section('content')

    <!-- DOCTOR BREADCRUMBS -->
    <section id="doctor-breadcrumbs" class="bg-fixed doctor-details-section division">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-5">
                    <div class="doctor-data white-color">

                        <!-- Name -->
                        <h2 class="h2-xs">{{$doctor->name}}</h2>
                    </div>
                </div>
            </div>   <!-- End row -->
        </div>	  <!-- End container -->
    </section>	<!-- END DOCTOR BREADCRUMBS -->

    <!-- DOCTOR-1 DETAILS -->
    <section id="doctor-1-details" class="doctor-details-section division">
        <div class="container">
            <div class="row">


                <!-- DOCTOR PHOTO -->
                <div class="col-md-5">
                    <div class="doctor-photo mb-40">

                        <!-- Photo -->
                        <img class="img-fluid my_border_radius" src="{{url('/thumbnail/700/800/80/storage/doctor_images/'.($doctor->image ? $doctor->image : 'default.png'))}}" alt="doctor-foto">

                        <!-- Doctor Info -->
                        {{--<div class="doctor-info">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td>Degrees</td>
                                    <td>M.D. of Medicine</td>
                                </tr>
                                <tr>
                                    <td>Areas of Expertise</td>
                                    <td><span><i class="fas fa-angle-double-right"></i> Neurology</span>
                                        <span><i class="fas fa-angle-double-right"></i> Immunology</span>
                                        <span><i class="fas fa-angle-double-right"></i> Internal Medicine</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Language(s)</td>
                                    <td>English / Spanish / German</td>
                                </tr>
                                <tr class="last-tr">
                                    <td>Work Days</td>
                                    <td>Tuesday - Thursday</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>--}}	<!-- End Doctor Info -->

                        <!-- Doctor Contacts -->
                        <div class="doctor-contacts text-center">
                            <a href="tel:{{setting('phone')}}"><h4 class="h4-xs"><i class="fas fa-mobile-alt"></i>{{setting('phone')}}</h4></a>
                            <h4 class="h4-xs blue-color"><i class="fas fa-envelope-open-text"></i>
                                <a href="mailto:{{setting('email')}}" class="blue-color">{{setting('email')}}</a>
                            </h4>
                        </div>



                    </div>
                </div>	<!-- END DOCTOR PHOTO -->


                <!-- DOCTOR'S BIO -->
                <div class="col-md-7">
                    <div class="doctor-bio pcb-10">

                        {!! $doctor->description !!}

                    </div>
                    <!-- Buttons -->
                    <div class="doctor-photo-btn text-center">
                        <a href="{{route('appointment')}}" class="btn btn-md btn-blue blue-hover">@lang('site.make_appointment')</a>
                    </div>
                </div>	<!-- END DOCTOR BIO -->


            </div>    <!-- End row -->
        </div>	   <!-- End container -->
    </section>  <!-- END DOCTOR-1 DETAILS -->


@endsection
