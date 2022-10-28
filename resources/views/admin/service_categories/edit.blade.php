@extends('layouts.admin.app')

@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.service_categories')</h5>
                    <!--end::Page Title-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm mr-4">

                        <li class="breadcrumb-item">
                            <a href="{{route('admin.service_categories.index')}}" class="text-muted">@lang('site.service_categories')</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);" class="text-muted">@lang('site.edit')</a>
                        </li>
                    </ul>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Actions-->
                    <ul class="nav nav-light-success nav-bold nav-pills" id="myTabs">
                        @foreach(config('translatable.locales') as $locale)
                            <li class="nav-item">
                                <a class="nav-link lang-nav-link {{($locale == 'ar') ? 'active' : ''}}" data-toggle="tab" href="#{{$locale}}" data-locale="{{$locale}}">
                                    <span class="nav-icon"><i class="la la-language"></i></span>
                                    {{($locale == 'ar') ? 'العربية' : 'الإنكليزية'}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <!--end::Actions-->
                </div>
            <!--end::Toolbar-->
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
                        <h3 class="card-title">@lang('site.edit')</h3>
                        <div class="card-toolbar justify-content-center">
                            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="" data-original-title="تكبير/تصغير">
                                <i class="ki ki-arrow-down icon-nm"></i>
                            </a>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form id="validatable-form" class="form validatable-form" method="post" action="{{ route('admin.service_categories.update', $serviceCategory->id) }}">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="row">
                                {{--name--}}
                                <div class="tab-content col-lg-12">
                                    @foreach(config('translatable.locales') as $locale)
                                        <div class="tab-pane lang-tab-pane fade {{($locale == 'ar') ? 'show active' : ''}}" id="{{$locale}}" data-locale="{{$locale}}">
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.name')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="هذة الحقول لها قيم مختلفة لكل لغة"></span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-square"></i></span>
                                                    </div>
                                                    <input name="{{$locale}}[name]" class="form-control lang_fields_{{$locale}}" type="text" value="{{ $serviceCategory->translate($locale)->name }}" placeholder="أكتب العنوان" required="required">
                                                </div>
                                                <span class="form-text text-muted">قم بكتابة العنوان</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="card-footer bg-gray-100">
                            <div class="row">
                                <div class="col text-left">
                                    <button type="submit" class="btn btn-primary mr-2">@lang('site.edit')</button>
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

@push('scripts')
    @include('layouts.admin.validate')
@endpush
