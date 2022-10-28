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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('site.settings')</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
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
                    <ul class="nav nav-light-success nav-bold nav-pills" id="myTabs">
                        @foreach(config('translatable.locales') as $locale)
                            <li class="nav-item">
                                <a class="nav-link {{($locale == 'ar') ? 'active' : ''}}" data-toggle="tab" href="#{{$locale}}">
                                    <span class="nav-icon"><i class="la la-language"></i></span>
                                    {{($locale == 'ar') ? 'العربية' : 'الإنكليزية'}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <!--end::Actions-->
                </div>
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
            @include('admin.partials._errors')
            @include('admin.partials._session')
            <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact" data-card="true">
                    <div class="card-header">
                        <h3 class="card-title">عام</h3>
                        <div class="card-toolbar justify-content-center">
                            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="" data-original-title="تكبير/تصغير">
                                <i class="ki ki-arrow-down icon-nm"></i>
                            </a>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form id="contact_form" class="form validatable-form" method="post" action="{{ route('admin.settings.store') }}" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card-body">
                            <div class="row">
                                @php
                                    //dd(setting('en')['title']);
                                @endphp
                                <div class="tab-content col-lg-12">
                                    @foreach(config('translatable.locales') as $locale)
                                        <div class="tab-pane fade {{($locale == 'ar') ? 'show active' : ''}}" id="{{$locale}}" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                            {{--setting_title--}}
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.setting_title')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="هذة الحقول لها قيم مختلفة لكل لغة"></span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-square"></i></span>
                                                    </div>
                                                    <input name="{{$locale}}[title]" class="form-control lang_fields_{{$locale}}" type="text" value="{{setting($locale)['title']}}" placeholder="أكتب @lang('site.' . $locale . '.setting_title')" required="required">
                                                </div>
                                                <span class="form-text text-muted">قم بكتابة @lang('site.' . $locale . '.setting_title')</span>
                                            </div>

                                            {{--address--}}
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.office_address')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="هذة الحقول لها قيم مختلفة لكل لغة"></span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-square"></i></span>
                                                    </div>
                                                    <input name="{{$locale}}[address]" class="form-control lang_fields_{{$locale}}" type="text" value="{{setting($locale)['address']}}" placeholder="أكتب @lang('site.' . $locale . '.office_address')" required="required">
                                                </div>
                                                <span class="form-text text-muted">قم بكتابة @lang('site.' . $locale . '.office_address')</span>
                                            </div>

                                            {{--setting_description--}}
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.setting_description')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="هذة الحقول لها قيم مختلفة لكل لغة"></span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-square"></i></span>
                                                    </div>
                                                    <textarea name="{{$locale}}[description]" class="form-control lang_fields_{{$locale}}" type="text" placeholder="أكتب @lang('site.' . $locale . '.setting_description')" required="required">{{setting($locale)['description']}}</textarea>
                                                </div>
                                                <span class="form-text text-muted">قم بكتابة @lang('site.' . $locale . '.setting_description')</span>
                                            </div>
                                            {{--site_keywords--}}
                                            <div class="form-group">
                                                <label>@lang('site.' . $locale . '.site_keywords')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="هذة الحقول لها قيم مختلفة لكل لغة"></span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-square"></i></span>
                                                    </div>
                                                    <textarea name="{{$locale}}[site_keywords]" class="form-control lang_fields_{{$locale}}" type="text" placeholder="أكتب @lang('site.' . $locale . '.site_keywords')" required="required">{{setting($locale)['site_keywords']}}</textarea>
                                                </div>
                                                <span class="form-text text-muted">قم بكتابة @lang('site.' . $locale . '.site_keywords')</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{--phone--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.phone')<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input name="phone" class="form-control" type="text" value="{{setting('phone')}}" placeholder="أكتب @lang('site.phone')" required="required">
                                    </div>
                                </div>

                                {{--iframe--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.iframe')<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <textarea name="iframe" class="form-control" type="text" placeholder="أكتب @lang('site.iframe')" required="required">{{setting('iframe')}}</textarea>
                                    </div>
                                </div>

                                {{--email--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.email')<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input name="email" class="form-control" type="email" value="{{setting('email')}}" placeholder="أكتب @lang('site.email')" required="required">
                                    </div>
                                </div>

                                {{--facebook--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.facebook')</label>
                                    <div class="input-group">
                                        <input name="facebook" class="form-control" type="text" value="{{setting('facebook')}}" placeholder="أكتب @lang('site.facebook')">
                                    </div>
                                </div>

                                {{--instagram--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.instagram')</label>
                                    <div class="input-group">
                                        <input name="instagram" class="form-control" type="text" value="{{setting('instagram')}}" placeholder="أكتب @lang('site.instagram')">
                                    </div>
                                </div>

                                {{--telegram--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.telegram')</label>
                                    <div class="input-group">
                                        <input name="telegram" class="form-control" type="text" value="{{setting('telegram')}}" placeholder="أكتب @lang('site.telegram')">
                                    </div>
                                </div>

                                {{--twitter--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.twitter')</label>
                                    <div class="input-group">
                                        <input name="twitter" class="form-control" type="text" value="{{setting('twitter')}}" placeholder="أكتب @lang('site.twitter')">
                                    </div>
                                </div>

                                {{--youtube--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.youtube')</label>
                                    <div class="input-group">
                                        <input name="youtube" class="form-control" type="text" value="{{setting('youtube')}}" placeholder="أكتب @lang('site.youtube')">
                                    </div>
                                </div>

                                {{--logo--}}
                                <div class="form-group col-lg-12">
                                    <label for="image">@lang('site.logo')</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="image-input image-input-outline image-input-circle" id="kt_image_1">
                                            <div class="image-input-wrapper" style="background-image: url({{asset('storage/settings/'.setting('logo'))}});"></div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="@lang('site.change_avatar')">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="logo" accept=".png, .jpg, .jpeg, .ico">
                                            </label>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="@lang('site.cancel_avatar')">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                        <span class="form-text text-muted">يسمح بالصور من نوع: png, jpg, jpeg.</span>
                                    </div>
                                </div>

                                {{--dark_logo--}}
                                <div class="form-group col-lg-12">
                                    <label for="image">@lang('site.dark_logo')</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="image-input image-input-outline image-input-circle" id="kt_image_2">
                                            <div class="image-input-wrapper" style="background-image: url({{asset('storage/settings/'.setting('dark_logo'))}});"></div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="@lang('site.change_avatar')">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="dark_logo" accept=".png, .jpg, .jpeg, .ico">
                                            </label>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="@lang('site.cancel_avatar')">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                        <span class="form-text text-muted">يسمح بالصور من نوع: png, jpg, jpeg.</span>
                                    </div>
                                </div>

                                {{--favicon--}}
                                <div class="form-group col-lg-12">
                                    <label for="image">@lang('site.favicon')</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="image-input image-input-outline image-input-circle" id="kt_image_3">
                                            <div class="image-input-wrapper" style="background-image: url({{asset('storage/settings/'.setting('fav_icon'))}});"></div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="@lang('site.change_avatar')">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="fav_icon" accept=".png, .jpg, .jpeg, .ico">
                                            </label>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="@lang('site.cancel_avatar')">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                        <span class="form-text text-muted">يسمح بالصور من نوع: png, jpg, jpeg.</span>
                                    </div>
                                </div>

                                {{--skin_shows--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.skin_shows')</label>
                                    <input type="file" name="skin_shows" class="form-control image_skin_shows">
                                </div>

                                <div class="form-group col-lg-12">
                                    <img src="{{url('/thumbnail/100/100/80/storage/settings/'.setting('skin_shows'))}}"  style="width: 100px" class="img-thumbnail image_preview_skin_shows" alt="">
                                </div>

                                {{--laser_shows--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.laser_shows')</label>
                                    <input type="file" name="laser_shows" class="form-control image_laser_shows">
                                </div>

                                <div class="form-group col-lg-12">
                                    <img src="{{url('/thumbnail/100/100/80/storage/settings/'.setting('laser_shows'))}}"  style="width: 100px" class="img-thumbnail image_preview_laser_shows" alt="">
                                </div>

                                {{--nutrition_offers--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.nutrition_offers')</label>
                                    <input type="file" name="nutrition_offers" class="form-control image_nutrition_offers">
                                </div>

                                <div class="form-group col-lg-12">
                                    <img src="{{url('/thumbnail/100/100/80/storage/settings/'.setting('nutrition_offers'))}}"  style="width: 100px" class="img-thumbnail image_preview_nutrition_offers" alt="">
                                </div>

                                {{--dental_shows--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.dental_shows')</label>
                                    <input type="file" name="dental_shows" class="form-control image_dental_shows">
                                </div>

                                <div class="form-group col-lg-12">
                                    <img src="{{url('/thumbnail/100/100/80/storage/settings/'.setting('dental_shows'))}}"  style="width: 100px" class="img-thumbnail image_preview_dental_shows" alt="">
                                </div>

                                {{--skin_offers--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.skin_offers')</label>
                                    <input type="file" name="skin_offers" class="form-control image_skin_offers">
                                </div>

                                <div class="form-group col-lg-12">
                                    <img src="{{url('/thumbnail/100/100/80/storage/settings/'.setting('skin_offers'))}}"  style="width: 100px" class="img-thumbnail image_preview_skin_offers" alt="">
                                </div>

                                {{--surgery_offers--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.surgery_offers')</label>
                                    <input type="file" name="surgery_offers" class="form-control image_surgery_offers">
                                </div>

                                <div class="form-group col-lg-12">
                                    <img src="{{url('/thumbnail/100/100/80/storage/settings/'.setting('surgery_offers'))}}"  style="width: 100px" class="img-thumbnail image_preview_surgery_offers" alt="">
                                </div>

                                {{--dr_ahmad--}}
                                <div class="form-group col-lg-12">
                                    <label>@lang('site.dr_ahmad')</label>
                                    <input type="file" name="dr_ahmad" class="form-control image_dr_ahmad">
                                </div>

                                <div class="form-group col-lg-12">
                                    <img src="{{url('/thumbnail/100/100/80/storage/settings/'.setting('dr_ahmad'))}}"  style="width: 100px" class="img-thumbnail image_preview_dr_ahmad" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-gray-100">
                            <div class="row">
                                <div class="col text-left">
                                    <button type="submit" class="btn btn-primary mr-2">@lang('site.edit')</button>
                                    <button type="reset" class="btn btn-secondary">إعادة</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        if ($("#contact_form").length > 0) {
            $("#contact_form").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        maxlength: 15,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    type: {
                        required: true,
                        minlength: 3,
                        maxlength: 15,
                    },
                    password: {
                        minlength: 8,
                        required: true,
                    },
                    password_confirmation: {
                        equalTo : "#password"
                    }
                },
                messages: {
                    name: {
                        required: "@lang('site.error_req')",
                        minlength: "@lang('site.error_min')",
                        maxlength: "@lang('site.error_max')",
                    },
                    type: {
                        required: "@lang('site.error_req')",
                        minlength: "@lang('site.error_min')",
                        maxlength: "@lang('site.error_max')",
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
                        equalTo: "@lang('site.error_equal')",
                    }
                }
            })
        }
    </script>
    <script src="{{asset('admin/assets/js/pages/crud/file-upload/image-input.js?v=7.2.9')}}"></script>

    {{--image--}}
    <script>
        // // image preview
        $(".image_skin_shows").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.image_preview_skin_shows').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".image_laser_shows").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.image_preview_laser_shows').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".image_nutrition_offers").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.image_preview_nutrition_offers').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".image_dental_shows").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.image_preview_dental_shows').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".image_skin_offers").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.image_preview_skin_offers').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".image_surgery_offers").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.image_preview_surgery_offers').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".image_skin_shows").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.image_preview_skin_shows').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });

        $(".image_dr_ahmad").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.image_preview_dr_ahmad').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });

    </script>
@endpush
