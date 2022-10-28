@extends('layouts.admin.app')

@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('site.users')</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('admin.users.index')}}" class="text-muted">@lang('site.users')</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="javascript:;" class="text-muted">@lang('site.edit')</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
            @include('admin.partials._errors')
            <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact" data-card="true">
                    <div class="card-header">
                        <h3 class="card-title">إنشاء جديد</h3>
                        <div class="card-toolbar justify-content-center">
                            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="" data-original-title="تكبير/تصغير">
                                <i class="ki ki-arrow-down icon-nm"></i>
                            </a>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form id="appointment_form" class="form validatable-form" method="post" action="" >
                        
                        <div class="card-body">
                            <div class="row">
                                {{--doctor_category_id--}}
                                <div class="form-group col-lg-6">
                                    <label>@lang('site.doctorCategory')<span class="text-danger">*</span></label>
                                    <input name="name" type="text" class="form-control" placeholder="@lang('site.doctorCategory')" value="{{ $appointment[0]->doctorCategory->name }}" disabled/>
                                </div>
                                {{--doctor_id--}}
                                <div class="form-group col-lg-6">
                                    <label>@lang('site.doctor')<span class="text-danger">*</span></label>
                                    <input name="name" type="text" class="form-control" placeholder="@lang('site.doctor')" value="{{ $appointment[0]->doctor->name }}" disabled/>
                                </div>
                                {{--date--}}
                                <div class="form-group col-lg-6">
                                    <label>@lang('site.date')<span class="text-danger">*</span></label>
                                    <input name="name" type="text" class="form-control" placeholder="@lang('site.date')" value="{{ $appointment[0]->date }}" disabled/>
                                </div>
                                {{--name--}}
                                <div class="form-group col-lg-6">
                                    <label>@lang('site.name')<span class="text-danger">*</span></label>
                                    <input name="name" type="text" class="form-control" placeholder="@lang('site.name')" value="{{ $appointment[0]->name }}" disabled/>
                                </div>
                                {{--email--}}
                                <div class="form-group col-lg-6">
                                    <label>@lang('site.email') <span class="text-danger">*</span></label>
                                    <input name="email" type="email" class="form-control"  placeholder="@lang('site.email')" value="{{ $appointment[0]->email }}" disabled/>
                                </div>
                                {{--phone--}}
                                <div class="form-group col-lg-6">
                                    <label>@lang('site.phone')<span class="text-danger">*</span></label>
                                    <input name="phone" type="text" class="form-control" value="{{ $appointment[0]->phone }}" disabled/>
                                </div>

                                {{--message--}}
                                <div class="form-group col-lg-6">
                                    <label>@lang('site.message')<span class="text-danger">*</span></label>
                                    <textarea name="message" type="text" class="form-control" disabled >{{ $appointment[0]->message }}</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>

@endsection
