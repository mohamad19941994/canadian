@extends('layouts.web.app')
@section('page_title')@lang('site.doctors')@endsection
@section('content')

    <!-- TABS-1
    ============================================= -->
    <section id="tabs-1" class="wide-100 tabs-section division">
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <!-- TABS NAVIGATION -->
                    <div id="tabs-nav" class="list-group text-center">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">

                            <!-- TAB-1 LINK -->
                            <li class="nav-item icon-xs">
                                <a class="nav-link active" id="tab1-list" data-toggle="pill" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
                                    <span class="flaticon-083-stethoscope"></span> أطباء قسم الأسنان في مجمع سوان الطبي
                                </a>
                            </li>

                        </ul>

                    </div>	<!-- END TABS NAVIGATION -->


                    <!-- TABS CONTENT -->
                    <div class="tab-content" id="pills-tabContent">


                        <!-- TAB-1 CONTENT -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1-list">
                            <div class="row d-flex align-items-center">





                                    <!-- DOCTOR #1 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="doctor-2">

                                            <!-- Doctor Photo -->
                                            <div class="hover-overlay">
                                                <img class="img-fluid" src="{{asset('web/images/doctor-1.jpg')}}" alt="doctor-foto">
                                            </div>

                                            <!-- Doctor Meta -->
                                            <div class="doctor-meta">

                                                <h5 class="h5-xs blue-color">Jonathan Barnes D.M.</h5>
                                                <span>Chief Medical Officer</span>

                                                <!-- Button -->
                                                <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{route('doctor-profile')}}" title="">View More Info</a>

                                            </div>

                                        </div>
                                    </div>	<!-- END DOCTOR #1 -->


                                    <!-- DOCTOR #2 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="doctor-2">

                                            <!-- Doctor Photo -->
                                            <div class="hover-overlay">
                                                <img class="img-fluid" src="{{asset('web/images/doctor-2.jpg')}}" alt="doctor-foto">
                                            </div>

                                            <!-- Doctor Meta -->
                                            <div class="doctor-meta">

                                                <h5 class="h5-xs blue-color">Hannah Harper D.M.</h5>
                                                <span>Anesthesiologist</span>

                                                <!-- Button -->
                                                <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{route('doctor-profile')}}" title="">View More Info</a>

                                            </div>

                                        </div>
                                    </div>	<!-- END DOCTOR #2 -->


                                    <!-- DOCTOR #3 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="doctor-2">

                                            <!-- Doctor Photo -->
                                            <div class="hover-overlay">
                                                <img class="img-fluid" src="{{asset('web/images/doctor-3.jpg')}}" alt="doctor-foto">
                                            </div>

                                            <!-- Doctor Meta -->
                                            <div class="doctor-meta">

                                                <h5 class="h5-xs blue-color">Matthew Anderson D.M.</h5>
                                                <span>Cardiology</span>

                                                <!-- Button -->
                                                <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{route('doctor-profile')}}" title="">View More Info</a>

                                            </div>

                                        </div>
                                    </div>	<!-- END DOCTOR #3 -->


                                    <!-- DOCTOR #4 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="doctor-2">

                                            <!-- Doctor Photo -->
                                            <div class="hover-overlay">
                                                <img class="img-fluid" src="{{asset('web/images/doctor-4.jpg')}}" alt="doctor-foto">
                                            </div>

                                            <!-- Doctor Meta -->
                                            <div class="doctor-meta">

                                                <h5 class="h5-xs blue-color">Megan Coleman D.M.</h5>
                                                <span>Neurosurgeon</span>

                                                <!-- Button -->
                                                <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{route('doctor-profile')}}" title="">View More Info</a>

                                            </div>

                                        </div>
                                    </div>	<!-- END DOCTOR #4 -->


                                    <!-- DOCTOR #5 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="doctor-2">

                                            <!-- Doctor Photo -->
                                            <div class="hover-overlay">
                                                <img class="img-fluid" src="{{asset('web/images/doctor-5.jpg')}}" alt="doctor-foto">
                                            </div>

                                            <!-- Doctor Meta -->
                                            <div class="doctor-meta">

                                                <h5 class="h5-xs blue-color">Robert Peterson D.M.</h5>
                                                <span>Allergist</span>

                                                <!-- Button -->
                                                <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{route('doctor-profile')}}" title="">View More Info</a>

                                            </div>

                                        </div>
                                    </div>	<!-- END DOCTOR #5 -->


                                    <!-- DOCTOR #6 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="doctor-2">

                                            <!-- Doctor Photo -->
                                            <div class="hover-overlay">
                                                <img class="img-fluid" src="{{asset('web/images/doctor-6.jpg')}}" alt="doctor-foto">
                                            </div>

                                            <!-- Doctor Meta -->
                                            <div class="doctor-meta">

                                                <h5 class="h5-xs blue-color">Joshua Elledge D.M.</h5>
                                                <span>Orthopaedics</span>

                                                <!-- Button -->
                                                <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{route('doctor-profile')}}" title="">View More Info</a>

                                            </div>

                                        </div>
                                    </div>	<!-- END DOCTOR #6 -->


                                    <!-- DOCTOR #7 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="doctor-2">

                                            <!-- Doctor Photo -->
                                            <div class="hover-overlay">
                                                <img class="img-fluid" src="{{asset('web/images/doctor-3.jpg')}}" alt="doctor-foto">
                                            </div>

                                            <!-- Doctor Meta -->
                                            <div class="doctor-meta">

                                                <h5 class="h5-xs blue-color">Matthew Anderson D.M.</h5>
                                                <span>Cardiology</span>

                                                <!-- Button -->
                                                <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{route('doctor-profile')}}" title="">View More Info</a>

                                            </div>

                                        </div>
                                    </div>	<!-- END DOCTOR #7 -->


                                    <!-- DOCTOR #8 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="doctor-2">

                                            <!-- Doctor Photo -->
                                            <div class="hover-overlay">
                                                <img class="img-fluid" src="{{asset('web/images/doctor-1.jpg')}}" alt="doctor-foto">
                                            </div>

                                            <!-- Doctor Meta -->
                                            <div class="doctor-meta">

                                                <h5 class="h5-xs blue-color">Jonathan Barnes D.M.</h5>
                                                <span>Chief Medical Officer</span>

                                                <!-- Button -->
                                                <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{route('doctor-profile')}}" title="">View More Info</a>

                                            </div>

                                        </div>
                                    </div>	<!-- END DOCTOR #8 -->


                                    <!-- DOCTOR #9 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="doctor-2">

                                            <!-- Doctor Photo -->
                                            <div class="hover-overlay">
                                                <img class="img-fluid" src="{{asset('web/images/doctor-2.jpg')}}" alt="doctor-foto">
                                            </div>

                                            <!-- Doctor Meta -->
                                            <div class="doctor-meta">

                                                <h5 class="h5-xs blue-color">Hannah Harper D.M.</h5>
                                                <span>Anesthesiologist</span>

                                                <!-- Button -->
                                                <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{route('doctor-profile')}}" title="">View More Info</a>

                                            </div>

                                        </div>
                                    </div>	<!-- END DOCTOR #9 -->



                            </div>
                        </div>	<!-- END TAB-1 CONTENT -->


                    </div>	<!-- END TABS CONTENT -->


                </div>
            </div>     <!-- End row -->
        </div>     <!-- End container -->
    </section>	<!-- END TABS-1 -->

@endsection
