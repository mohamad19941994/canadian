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
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('site.landings')</h5>
                    <!--end::Page Title-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm mr-4">

                        <li class="breadcrumb-item">
                            <a href="{{route('admin.landings.index')}}" class="text-muted">@lang('site.landings')</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);" class="text-muted">@lang('site.show_all')</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Actions-->
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
                            <h3 class="card-label">@lang('site.landings')</h3>
                        </div>
                        <div class="card-toolbar">
                            @include('admin.partials._session')
                            <!--begin::Button-->
                            <!--end::Button-->
                            <!--begin::Button-->
                            @if (auth()->user()->hasPermission('delete_landings'))
                                <form method="post" action="{{ route('admin.landings.bulk_delete') }}" style="display: inline-block;">
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
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label for="form_select">نوع العرض</label>
                                <select name="type" class="form-control filterTypeOffer" id="form_select">
                                    <option value="">-- اختيار نوع العرض --</option>
                                    <option value="skin-shows">عروض البشرة</option>
                                    <option value="laser-shows">عروض الليزر</option>
                                    <option value="nutrition-offers">عروض التغذية</option>
                                    <option value="dental-shows">عروض الأسنان</option>
                                    <option value="skin-offers">عروض الجلدية</option>
                                    <option value="surgery-offers">عروض جراحة التجميل</option>
                                    <option value="dr-ahmad">الدكتور أحمد</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-2 mt-8">
                                <button type="submit" id="filterSubmit" class="btn btn-outline-warning">بحث</button>
                            </div>
                        </div>
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
                                <th>@lang('site.phone')</th>
                                <th>@lang('site.type_landing')</th>
                                <th>@lang('site.service')</th>
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
        let landingsTable = $('#kt_datatable').DataTable({
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
                url: '{{route('admin.landings.data')}}',
                data: function (d) {
                    d.type = $('.filterTypeOffer').val();
                    console.log(d);
                }
            },

            columns: [
                {data: 'record_select', name: 'record_select', searchable: false, sortable: false},
                {data: 'name', name: 'name'},
                {data: 'phone', name: 'phone', searchable: false, sortable: false},
                {data: 'type', name: 'landings.type', searchable: false, sortable: false},
                {data: 'service', name: 'service', searchable: false, sortable: false},
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ],
            //order: [[2, 'desc']],

            drawCallback: function (settings) {
                $('.record__select').prop('checked', false);
                $('#select_all').prop('checked', false);
                $('#record-ids').val();
                $('#bulk-delete').attr('disabled', true);
            },
        });

        $('#data-table-search').keyup(function () {
            landingsTable.search(this.value).draw();
        })

        $('#filterSubmit').on('click', function(e) {
            landingsTable.draw();
            e.preventDefault();
        });
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

@endpush
