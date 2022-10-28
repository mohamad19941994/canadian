@extends('layouts.web.app')
@section('page_title')@lang('site.profile')@endsection
@section('content')
    <!-- DOCTOR BREADCRUMBS -->
    <section id="doctor-breadcrumbs" class="bg-fixed doctor-details-section division">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-5">
                    <div class="doctor-data white-color pr-0 pl-0">

                        <!-- Name -->
                        <h2 class="h2-xs">{{$user->name}}</h2>
                    </div>
                </div>
            </div>   <!-- End row -->
        </div>	  <!-- End container -->
    </section>	<!-- END DOCTOR BREADCRUMBS -->




    <!-- DOCTOR-1 DETAILS -->
    <section id="doctor-1-details" class="doctor-details-section division">
        <div class="container">
            <div class="row">
                <!-- DOCTOR'S BIO -->
                <div class="col-md-12">
                    <div class="doctor-bio">

                        <!-- Photo -->


                        <!-- Doctor Info -->
                        <div class="doctor-info">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td>تاريخ الموعد</td>
                                    <td>حالة الموعد</td>
                                    <td>الدكتور</td>
                                </tr>
                                @if($appointments->count() > 0)
                                    @foreach($appointments as $appointment)
                                        <tr>

                                            <td>{{$appointment->date}}</td>
                                        @php

                                        if ($appointment->status == 0){
                                        $status = 'قيد الإنتظار';
                                        }else{

                                            $status = 'مقبول';
                                        }
                                        @endphp
                                            <td>{{$status}}</td>
                                            <td>{{$appointment->doctor->name}}</td>
                                        @endforeach
                                @else
                                    <td>لا يوجد أي موعد حاليا</td>

                                        </tr>
                                    @endif



                                </tbody>
                            </table>
                        </div>	<!-- End Doctor Info -->

                        <!-- Doctor Contacts -->
                        <div class="doctor-contacts text-center">
                            @if($user->phone)
                            <h4 class="h4-xs"><i class="fas fa-mobile-alt"></i> {{$user->phone}}</h4>
                            @endif
                            @if($user->email)
                            <h4 class="h4-xs blue-color"><i class="fas fa-envelope-open-text"></i>
                                <a href="mailto:yourdomain@mail.com" class="blue-color">{{$user->email}}</a>
                            </h4>
                            @endif
                        </div>

                        <!-- Buttons -->
                        <div class="doctor-photo-btn text-center">
                            <a href="{{route('appointment')}}" class="btn btn-md btn-blue blue-hover">@lang('site.make_appointment')</a>

                        </div>

                    </div>
                </div>	<!-- END DOCTOR BIO -->


            </div>    <!-- End row -->
        </div>	   <!-- End container -->
    </section>  <!-- END DOCTOR-1 DETAILS -->
@endsection
