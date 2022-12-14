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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('site.sliders')</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('admin.sliders.index')}}" class="text-muted">@lang('site.sliders')</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="javascript:;" class="text-muted">@lang('site.add')</a>
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
                                <a class="nav-link lang-nav-link {{($locale == 'ar') ? 'active' : ''}}" data-toggle="tab" href="#{{$locale}}" data-locale="{{$locale}}">
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
                        <h3 class="card-title">?????????? ????????</h3>
                        <div class="card-toolbar justify-content-center">
                            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="" data-original-title="??????????/??????????">
                                <i class="ki ki-arrow-down icon-nm"></i>
                            </a>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form id="validatable-form" class="form validatable-form" method="post" action="{{ route('admin.sliders.store') }}" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card-body">
                            <div class="row">
                                <div class="tab-content col-lg-12">
                                    @foreach(config('translatable.locales') as $locale)
                                        <div class="tab-pane lang-tab-pane fade {{($locale == 'ar') ?  'show active' : ''}}" id="{{$locale}}" data-locale="{{$locale}}">
                                            {{--subhead--}}
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.subhead')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="?????? ???????????? ?????? ?????? ???????????? ?????? ??????"></span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-square"></i></span>
                                                    </div>
                                                    <input name="{{$locale}}[subhead]" class="form-control lang_fields_{{$locale}}" type="text" value="{{old($locale . '.subhead')}}" placeholder="???????? @lang('site.' . $locale . '.subhead')" >
                                                </div>
                                                <span class="form-text text-muted">???? ???????????? @lang('site.' . $locale . '.subhead')</span>
                                            </div>
                                            {{--name--}}
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.name')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="?????? ???????????? ?????? ?????? ???????????? ?????? ??????"></span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-square"></i></span>
                                                    </div>
                                                    <input name="{{$locale}}[name]" class="form-control lang_fields_{{$locale}}" type="text" value="{{old($locale . '.name')}}" placeholder="???????? @lang('site.' . $locale . '.name')">
                                                </div>
                                                <span class="form-text text-muted">???? ???????????? @lang('site.' . $locale . '.name')</span>
                                            </div>
                                            {{--description--}}
                                            <div class="form-group col-lg-12">
                                                <label>@lang('site.' . $locale . '.description')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="?????? ???????????? ?????? ?????? ???????????? ?????? ??????"></span>
                                                </label>
                                                <textarea name="{{$locale}}[description]" rows="3" placeholder="???????? ??????????" class="form-control lang_fields_{{$locale}}">{{old($locale . '.description')}}</textarea>
                                                <span class="form-text text-muted">???? ???????????? ??????????</span>
                                            </div>
                                            {{--image_alt--}}
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.image_alt')
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="?????? ???????????? ?????? ?????? ???????????? ?????? ??????"></span>
                                                </label>
                                                <div class="input-group">

                                                    <input name="{{$locale}}[image_alt]" class="form-control lang_fields_{{$locale}}" type="text" value="{{old($locale . '.image_alt')}}" placeholder="???????? @lang('site.' . $locale . '.image_alt')">
                                                </div>
                                                <span class="form-text text-muted">???? ???????????? @lang('site.' . $locale . '.image_alt')</span>
                                            </div>

                                            {{--button_name--}}
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.button_name')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="?????? ???????????? ?????? ?????? ???????????? ?????? ??????"></span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-square"></i></span>
                                                    </div>
                                                    <input name="{{$locale}}[button_name]" class="form-control lang_fields_{{$locale}}" type="text" value="{{old($locale . '.button_name')}}" placeholder="???????? @lang('site.' . $locale . '.button_name')">
                                                </div>
                                                <span class="form-text text-muted">???? ???????????? @lang('site.' . $locale . '.button_name')</span>
                                            </div>

                                            {{--button_url--}}
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.button_url')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="?????? ???????????? ?????? ?????? ???????????? ?????? ??????"></span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-square"></i></span>
                                                    </div>
                                                    <input name="{{$locale}}[button_url]" class="form-control lang_fields_{{$locale}}" type="text" value="{{old($locale . '.button_url')}}" placeholder="???????? @lang('site.' . $locale . '.button_url')">
                                                </div>
                                                <span class="form-text text-muted">???? ???????????? @lang('site.' . $locale . '.button_url')</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{--image--}}
                                <div class="form-group col-lg-12">
                                    <label for="image">@lang('site.image')</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="image-input image-input-outline image-input-circle" id="kt_image_3">
                                            <div class="image-input-wrapper" style="background-image: url('https://ui-avatars.com/api/?name=????????&color=000&background=03A9F4');"></div>
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
                                {{--image_background--}}
                                <div class="form-group col-lg-12">
                                    <label for="image">@lang('site.image_background')</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="image-input image-input-outline image-input-circle" id="kt_image_4">
                                            <div class="image-input-wrapper" style="background-image: url('https://ui-avatars.com/api/?name=????????&color=000&background=03A9F4');"></div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="@lang('site.change_avatar')">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="image_background" accept=".png, .jpg, .jpeg">
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
                                    <button type="submit" class="btn btn-primary mr-2">@lang('site.create')</button>
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
    <script src="{{asset('admin/assets/js/pages/crud/file-upload/image-input.js?v=7.2.9')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        if ($("#validatable-form").length > 0) {
            $("#validatable-form").validate({
                errorElement: 'div', //default input error message container
                focusInvalid: false, // do not focus the last invalid input
                ignore: '.ckeditor_container *',  // validate all fields including form hidden input
                rules: {

                    'ar[job]': {
                        required: true,
                    },
                    'en[job]': {
                        required: true,
                    },
                    'ar[comment]': {
                        required: true,
                    },
                    'en[comment]': {
                        required: true,
                    },
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    type: {
                        required: true,
                    },
                    password: {
                        minlength: 8,
                        required: true,
                    },
                    password_confirmation: {
                        required: true,
                        equalTo : "#password"
                    }
                },
                messages: {

                    'ar[job]': {
                        required: "@lang('site.error_req')",
                    },
                    'en[job]': {
                        required: "@lang('site.error_req')",
                    },
                    'ar[comment]': {
                        required: "@lang('site.error_req')",
                    },
                    'en[comment]': {
                        required: "@lang('site.error_req')",
                    },

                    type: {
                        required: "@lang('site.error_req')",
                    },
                    email: {
                        required: "@lang('site.error_req')",
                        email: "@lang('site.email_error_req')",
                    },
                    password: {
                        required: "@lang('site.error_req')",
                        minlength: "@lang('site.error_min_8')",
                    },
                    password_confirmation: {
                        required: "@lang('site.error_req')",
                        equalTo: "@lang('site.error_equal')",
                    }
                },
                errorPlacement: function(error, element) { // render error placement for each input type
                    element = $(element);

                    var group = $(element).closest('.form-group-sub,.form-group,.bootstrap-select,.select2-container');

                    var guide = group.find('.form-text');

                    if (! group.find('.valid-feedback, .invalid-feedback').length) {
                        error.addClass('invalid-feedback');
                        if (guide.length > 0) {
                            guide.before(error);
                        } else {
                            if (element.closest('.bootstrap-select').length > 0) {     //Bootstrap select
                                element.closest('.bootstrap-select').find('.bs-placeholder').after(error);
                            } else if (element.closest('.input-group').length > 0) {   //Bootstrap group
                                element.after(error);
                            } else {                                                   //Checkbox & radios
                                if (element.is(':checkbox')) {
                                    element.closest('.kt-checkbox').find('> span').after(error);
                                } else {
                                    element.after(error);
                                }
                            }
                        }
                    }
                },
                highlight: function(element) { // hightlight error inputs
                    var group = $(element).closest('.form-group-sub,.form-group,.bootstrap-select,.select2-container');
                    group.addClass('validate');
                    group.addClass('is-invalid');
                    $(element).removeClass('is-valid').addClass('is-invalid');
                },
                unhighlight: function(element) { // revert the change done by hightlight
                    var group = $(element).closest('.form-group-sub,.form-group,.bootstrap-select,.select2-container');
                    group.removeClass('validate');
                    group.removeClass('is-invalid');
                    $(element).removeClass('is-invalid');
                },
                success: function(label, element) {
                    var group = $(element).closest('.form-group-sub,.form-group,.bootstrap-select,.select2-container');
                    group.removeClass('validate');
                    group.find('.invalid-feedback').remove();
                    $(element).removeClass('is-invalid').addClass('is-valid');
                },
                invalidHandler: function(form, validator) {
                    // Scroll to invalid item
                    if (!validator.numberOfInvalids())
                        return;
                    var target=validator.errorList[0].element;
                    if($(target).parents('.lang-tab-pane').length)  // Mutli-langual input
                    {
                        var targeted_locale=$(target).parents('.lang-tab-pane').data('locale');
                        $('.lang-nav-link[data-locale='+targeted_locale+']').trigger('click');
                    }
                    $('html, body').animate({
                        scrollTop: $(target).offset().top - ($('html, body').height()/2)
                    }, 700);

                    //please_check_inputs
                    //notify(__('asdasd'),__('asdasd'),'warning',8000);

                    new Noty({
                        text: "<h2>@lang('site.alert')</h2><p>@lang('site.alert_des')</p>",
                        type: "warning",
                        layout: 'bottomLeft',
                        closeWith: ['click', 'button'],
                        killer: false,
                        modal: false,
                        timeout: 1000,
                    }).show();

                }
            })
        }
    </script>

@endpush
