@extends('layouts.admin.app')
@push('styles')
    <link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endpush
@section('content')

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.pages')</h5>
                    <!--end::Page Title-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm mr-4">

                        <li class="breadcrumb-item">
                            <a href="{{route('admin.pages.index')}}" class="text-muted">@lang('site.pages')</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);" class="text-muted">@lang('site.show_all')</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Actions-->
                    <a href="{{route('admin.pages.create')}}" class="btn btn-light-success font-weight-bolder btn-sm m-1">@lang('site.add_new')</a>
                    <!--end::Actions-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom gutter-t">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="fa fa-bars text-primary"></i>
                            </span>
                            <h3 class="card-label">@lang('site.pages')</h3>
                        </div>
                        <div class="card-toolbar">
                            @include('admin.partials._session')
                            <div class="dropdown dropdown-inline mr-2">
                                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
                                                <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>تصدير</button>
                                <!--begin::Dropdown Menu-->
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" style="">
                                    <!--begin::Navigation-->
                                    <ul class="navi flex-column navi-hover py-2">
                                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">حدد إختيار:</li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="la la-print"></i>
                                                </span>
                                                <span class="navi-text">طباعة</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
                                                <span class="navi-text">نسخ</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
                                                <span class="navi-text">إكسل</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
                                                <span class="navi-text">CSV</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                                <!--end::Dropdown Menu-->
                            </div>
                            <!--begin::Button-->
                            <a href="{{route('admin.pages.create')}}" class="btn btn-primary font-weight-bolder mr-2"><i class="la la-plus"></i>@lang('site.add_new')</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            @if (auth()->user()->hasPermission('delete_pages'))
                                <form method="post" action="{{ route('admin.pages.bulk_delete') }}" style="display: inline-block;">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="record_ids" id="record-ids">
                                    <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true"><i class="fa fa-trash"></i> @lang('site.bulk_delete')</button>
                                </form><!-- end of form -->
                            @endif
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        {{--<div class="form-group col-3">
                            <input type="text" id="data-table-search" class="form-control" autofocus placeholder="@lang('site.search')">
                        </div>--}}
                        <!--begin: Datatable-->
                        <table class="table table-bordered table-hover table-checkable sortable" id="kt_datatable" style="margin-top: 13px !important">
                            <thead>
                            <tr>
                                <th>
                                    <label class="checkbox">
                                        <input type="checkbox" id="select_all" name="select_all">
                                        <span></span>
                                    </label>
                                </th>
                                <th>@lang('site.name')</th>
                                <th>@lang('site.page_image')</th>
                                <th>@lang('site.created_at')</th>
                                <th>@lang('site.updated_at')</th>
                                <th>@lang('site.actions')</th>
                            </tr>
                            </thead>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

@endsection

@push('scripts')
    <script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    {{--<script src="{{asset('admin/assets/js/pages/crud/datatables/data-sources/ajax-server-side.js')}}"></script>--}}

    <script>
        let usersTable = $('#kt_datatable').DataTable({
            responsive: true,
            searchDelay: 500,
            dom:
                "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            serverSide: true,
            processing: true,
            language: {
                "url": "{{ asset('admin/datatable-lang/' . app()->getLocale() . '.json') }}"
            },
            ajax: {
                url: '{{route('admin.pages.data')}}',
            },
            columns: [
                {data: 'record_select', name: 'record_select', searchable: false, sortable: false},
                {data: 'name', name: 'name'},
                {data: 'images', name: 'images', searchable: false, sortable: false},
                {data: 'created_at', name: 'created_at', searchable: false},
                {data: 'updated_at', name: 'updated_at', searchable: false},
                {data: 'actions', name: 'actions', searchable: false, sortable: false},
            ],
            //order: [[4, 'desc']],
            drawCallback: function (settings) {
                $('.record__select').prop('checked', false);
                $('#select_all').prop('checked', false);
                $('#record-ids').val();
                $('#bulk-delete').attr('disabled', true);
            },
        });

        $('#data-table-search').keyup(function () {
            usersTable.search(this.value).draw();
        })
    </script>

    <script>
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            //select all functionality
            $(document).on('change', '.record__select', function () {
                getSelectedRecords();
            });

            // used to select all records
            $(document).on('change', '#select_all', function () {

                $('.record__select').prop('checked', this.checked);
                getSelectedRecords();
            });

            function getSelectedRecords() {
                var recordIds = [];

                $.each($(".record__select:checked"), function () {
                    recordIds.push($(this).val());
                });

                $('#record-ids').val(JSON.stringify(recordIds));

                recordIds.length > 0
                    ? $('#bulk-delete').attr('disabled', false)
                    : $('#bulk-delete').attr('disabled', true)

            }


        });//end of document ready

    </script>

    <script>
        $(document).ready(function () {

            //delete
            $(document).on('click', '.delete, #bulk-delete', function (e) {

                var that = $(this)

                e.preventDefault();

                var n = new Noty({
                    text: "<h2>@lang('site.confirm_delete')</h2><br><p>@lang('site.confirm_delete_des')</p>",
                    type: "alert",
                    theme: 'semanticui',
                    layout: 'bottomLeft',
                    killer: true,
                    buttons: [
                        Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                            let url = that.closest('form').attr('action');
                            let data = new FormData(that.closest('form').get(0));

                            let loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i>';
                            let originalText = that.html();
                            that.html(loadingText);

                            n.close();

                            $.ajax({
                                url: url,
                                data: data,
                                method: 'post',
                                processData: false,
                                contentType: false,
                                cache: false,
                                success: function (response) {

                                    $("#select_all").prop("checked", false);

                                    $('#kt_datatable').DataTable().ajax.reload();

                                    new Noty({
                                        layout: 'topRight',
                                        type: 'alert',
                                        text: response,
                                        killer: true,
                                        timeout: 2000,
                                    }).show();

                                    that.html(originalText);
                                },

                            });//end of ajax call

                        }),

                        Noty.button("@lang('site.no')", 'btn btn-danger mr-2', function () {
                            n.close();
                        })
                    ]
                });

                n.show();

            });//end of delete

        });//end of document ready
        function myFunctionn() {
            document.getElementById("my_form").submit();
        }
    </script>
@endpush
