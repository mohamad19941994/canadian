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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('site.videos')</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('admin.videos.index')}}" class="text-muted">@lang('site.videos')</a>
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
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Actions-->
                    <ul class="nav nav-light-success nav-bold nav-pills" id="myTabss">
                        @foreach(config('translatable.locales') as $locale)
                            <li class="nav-item">
                                <a class="nav-link lang-nav-link {{($locale == 'ar') ? 'active' : ''}}" data-toggle="tab" href="#{{$locale}}_video" data-locale="{{$locale}}">
                                    <span class="nav-icon"><i class="la la-language"></i></span>
                                    {{($locale == 'ar') ? '??????????????' : '????????????????????'}}
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
                            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="" data-original-title="??????????/??????????">
                                <i class="ki ki-arrow-down icon-nm"></i>
                            </a>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form id="validatable-form" class="form validatable-form" method="post" action="{{ route('admin.videos.update', $video->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="row">
                                {{--category--}}
                                <div class="form-group col-lg-12">
                                    <label for="form_select">@lang('site.category_parent')</label>
                                    <select name="category_id" class="form-control" id="form_select">
                                        {{--<option value="0">@lang('site.select_category')</option>--}}
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{ $category->id == $video->category_id ? 'selected' : ''  }}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="tab-content col-lg-12">
                                    @foreach(config('translatable.locales') as $locale)
                                        <div class="tab-pane lang-tab-pane fade {{($locale == 'ar') ? 'show active' : ''}}" id="{{$locale}}_video" role="tabpanel" aria-labelledby="kt_tab_pane_2" data-locale="{{$locale}}">
                                            {{--name--}}
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.name')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="?????? ???????????? ?????? ?????? ???????????? ?????? ??????"></span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-square"></i></span>
                                                    </div>
                                                    <input name="{{$locale}}[name]" class="form-control lang_fields_{{$locale}}" type="text" value="{{ $video->translate($locale)->name }}" placeholder="???????? ??????????????" required="required">
                                                </div>
                                                <span class="form-text text-muted">???? ???????????? ??????????????</span>
                                            </div>

                                            {{--meta_title--}}
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.meta_title')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="?????? ???????????? ?????? ?????? ???????????? ?????? ??????"></span>
                                                </label>
                                                <div class="input-group">

                                                    <input name="{{$locale}}[meta_title]" class="form-control lang_fields_{{$locale}}" type="text" value="{!! $video->translate($locale)->meta_title !!}" placeholder="???????? @lang('site.' . $locale . '.meta_title')" required="required">
                                                </div>
                                                <span class="form-text text-muted">???? ???????????? @lang('site.' . $locale . '.meta_title')</span>
                                            </div>
                                            {{--meta_description--}}
                                            <div class="form-group col-lg-12">
                                                <label>@lang('site.' . $locale . '.meta_description')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="?????? ???????????? ?????? ?????? ???????????? ?????? ??????"></span>
                                                </label>
                                                <textarea name="{{$locale}}[meta_description]" rows="3" placeholder="???????? @lang('site.' . $locale . '.meta_description')" class="form-control lang_fields_{{$locale}}">{!! $video->translate($locale)->meta_description !!}</textarea>
                                                <span class="form-text text-muted">???? ???????????? @lang('site.' . $locale . '.meta_description')</span>
                                            </div>
                                            {{--keywords--}}
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.keywords')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="?????? ???????????? ?????? ?????? ???????????? ?????? ??????"></span>
                                                </label>
                                                <div class="input-group">

                                                    <input name="{{$locale}}[keywords]" class="form-control lang_fields_{{$locale}}" type="text" value="{!! $video->translate($locale)->keywords !!}" placeholder="???????? @lang('site.' . $locale . '.keywords')" required="required">
                                                </div>
                                                <span class="form-text text-muted">???? ???????????? @lang('site.' . $locale . '.keywords')</span>
                                            </div>
                                            {{--image_alt--}}
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.image_alt')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="?????? ???????????? ?????? ?????? ???????????? ?????? ??????"></span>
                                                </label>
                                                <div class="input-group">

                                                    <input name="{{$locale}}[image_alt]" class="form-control lang_fields_{{$locale}}" type="text" value="{!! $video->translate($locale)->image_alt !!}" placeholder="???????? @lang('site.' . $locale . '.image_alt')" required="required">
                                                </div>
                                                <span class="form-text text-muted">???? ???????????? @lang('site.' . $locale . '.image_alt')</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{--image--}}
                                <div class="form-group col-lg-12">
                                    <label for="image">@lang('site.page_image')</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="image-input image-input-outline image-input-circle" id="kt_image_3">
                                            <div class="image-input-wrapper" style="background-image: url({{asset('storage/video_images/'.$video->image)}});"></div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="@lang('site.change_avatar')">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                            </label>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="@lang('site.cancel_avatar')">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                        <span class="form-text text-muted">???????? ???????????? ???? ??????: png, jpg, jpeg.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-gray-100">
                            <div class="row">
                                <div class="col text-left">
                                    <button type="submit" class="btn btn-primary mr-2">@lang('site.edit')</button>
                                    <button type="reset" class="btn btn-secondary">??????????</button>
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

    {{--image--}}
    <script src="{{asset('admin/assets/js/pages/crud/file-upload/image-input.js?v=7.2.9')}}"></script>
@endpush
