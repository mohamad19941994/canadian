@extends('layouts.admin.app')

@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.doctor_services')</h5>
                    <!--end::Page Title-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm mr-4">

                        <li class="breadcrumb-item">
                            <a href="#" class="text-muted">@lang('site.doctor_services')</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);" class="text-muted">@lang('site.create')</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Actions-->
                    <!--end::Actions-->
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
                        <h3 class="card-title">@lang('site.create')</h3>
                        <div class="card-toolbar justify-content-center">
                            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="" data-original-title="تكبير/تصغير">
                                <i class="ki ki-arrow-down icon-nm"></i>
                            </a>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form id="validatable-form" class="form validatable-form" method="post" action="{{ route('admin.doctor_services.store') }}" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card-body">
                            <div class="row">
                                {{--doctor_id--}}
                                <div class="form-group col-lg-12">
                                    <label for="form_select">@lang('site.doctor_category')</label>
                                    <select name="doctor_category_id" class="form-control" id="form_select">
                                        <option value="">@lang('site.doctor_category')</option>
                                        @foreach($doctor_categories as $d_category)
                                            <option value="{{$d_category->id}}">{{$d_category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="tab-content col-lg-12">
                                    @foreach(config('translatable.locales') as $locale)
                                        <div class="tab-pane lang-tab-pane fade {{($locale == 'ar') ? 'show active' : ''}}" id="{{$locale}}" data-locale="{{$locale}}">
                                            <!--name-->
                                            <div class="form-group">
                                                <label class=" ">@lang('site.' . $locale . '.name')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="هذة الحقول لها قيم مختلفة لكل لغة"></span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-square"></i></span>
                                                    </div>
                                                    <input name="{{$locale}}[name]" class="form-control lang_fields_{{$locale}}" type="text" value="{{old($locale . '.name')}}" placeholder="أكتب العنوان" required="required">
                                                </div>
                                                <span class="form-text text-muted">قم بكتابة العنوان</span>
                                            </div>
                                            {{--description--}}
                                            <div class="form-group">
                                                <label>@lang('site.' . $locale . '.description')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="هذة الحقول لها قيم مختلفة لكل لغة"></span>
                                                </label>
                                                <textarea name="{{$locale}}[description]" rows="3" placeholder="أكتب الوصف" id="{{$locale}}_my_tiny" class="form-control lang_fields_{{$locale}}">{{old($locale . '.description')}}</textarea>
                                                <span class="form-text text-muted">قم بكتابة @lang('site.' . $locale . '.description')</span>
                                            </div>

                                            {{--reasons--}}
                                            <div class="form-group">
                                                <label>@lang('site.' . $locale . '.reasons')<span class="text-danger">*</span>
                                                    <span class="m-1 text-primary la la-language" data-toggle="tooltip" title="هذة الحقول لها قيم مختلفة لكل لغة"></span>
                                                </label>
                                                <textarea name="{{$locale}}[reasons]" rows="3" placeholder="أكتب الوصف" class="form-control lang_fields_{{$locale}}">{{old($locale . '.reasons')}}</textarea>
                                                <span class="form-text text-muted">قم بكتابة @lang('site.' . $locale . '.reasons')</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        <div class="card-footer bg-gray-100">
                            <div class="row">
                                <div class="col text-left">
                                    <button type="submit" class="btn btn-primary mr-2">@lang('site.create')</button>
                                    <button type="reset" class="btn btn-secondary">إعادة</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                    <!--end::Form-->
            </div>
                <!--end::Card-->
            <!--end::Container-->
        </div>
    </div>
        <!--end::Entry-->

@endsection

@push('scripts')
    <script src="https://cdn.tiny.cloud/1/qcr09xadljfdl3rae0j3nmcvr2i1cp414gjvk1reivd25avu/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    {{--tinymce editor--}}
    <script>
        //ar
        tinymce.init({
            selector: '#ar_my_tiny',

            language: '{{app()->getLocale()}}',
            directionality : "{{(app()->getLocale() == 'ar' ? 'rtl' : 'ltr')}}",

            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',

            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | insertfile image media template link anchor codesample | charmap emoticons | fullscreen  preview save print | ltr rtl | pagebreak',
            image_class_list: [
                {title: 'None', value: ''},
                {title: 'img-fluid', value: 'img-fluid'},
            ],
            image_advtab: true,
            importcss_append: true,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            contextmenu: 'link image imagetools table',

            /* without images_upload_url set, Upload tab won't show up*/
            images_upload_url: "/post/image/upload",
            images_upload_credentials: true,
            file_picker_types: 'image',

            content_style: 'body { font-family: Cairo, sans-serif; font-size:14px }',
            rel_list: [
                { title: "No Follow", value: "nofollow" },
                { title: "Do Follow", value: "dofollow" },
                { title: "No Referrer", value: "noreferrer" },
                { title: "External Link", value: "external" },
            ]
        });
        //en
        tinymce.init({
            selector: '#en_my_tiny',

            language: '{{app()->getLocale()}}',
            directionality : "{{(app()->getLocale() == 'ar' ? 'rtl' : 'ltr')}}",

            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',

            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | insertfile image media template link anchor codesample | charmap emoticons | fullscreen  preview save print | ltr rtl | pagebreak',
            image_class_list: [
                {title: 'None', value: ''},
                {title: 'img-fluid', value: 'img-fluid'},
            ],
            image_advtab: true,
            importcss_append: true,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            contextmenu: 'link image imagetools table',

            /* without images_upload_url set, Upload tab won't show up*/
            images_upload_url: "/post/image/upload",
            images_upload_credentials: true,
            file_picker_types: 'image',

            content_style: 'body { font-family: Cairo, sans-serif; font-size:14px }',
            rel_list: [
                { title: "No Follow", value: "nofollow" },
                { title: "Do Follow", value: "dofollow" },
                { title: "No Referrer", value: "noreferrer" },
                { title: "External Link", value: "external" },
            ]
        });
    </script>

    <script src="{{asset('admin/assets/js/pages/crud/file-upload/image-input.js?v=7.2.9')}}"></script>

    @include('layouts.admin.validate')
@endpush
