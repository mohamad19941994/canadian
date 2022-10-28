@extends('layouts.web.app')
@section('page_title')@lang('site.skin_shows')@endsection
@section('content')
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
                                <li class="breadcrumb-item active" aria-current="page">@lang('site.skin_shows')</li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h4 class="h4-sm steelblue-color">@lang('site.skin_shows')</h4>

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
                            <img class="img-fluid my_border_radius" src="{{url('/thumbnail/900/900/80/storage/settings/'.setting('skin_shows'))}}" alt="info-image">
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
                                        <input type="hidden" name="type" value="skin-shows">
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
                                                <option value="skin_shows_1">@lang('site.skin_shows_1')</option>
                                                <option value="skin_shows_2">@lang('site.skin_shows_2')</option>
                                                <option value="skin_shows_3">@lang('site.skin_shows_3')</option>
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

@endsection
