@if (auth()->user()->hasPermission('update_doctors'))

    <a href="{{ route('admin.doctors.edit', $id) }}">
        <button type="button" class="btn btn-outline-primary">تعديل</button>
    </a>

@endif

@if (auth()->user()->hasPermission('delete_doctors'))

    <form action="{{ route('admin.doctors.destroy', $id) }}" class="my-1 my-xl-0" id="my_form" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-danger delete">@lang('site.delete')</button>
        {{--<a href="javascript:void(0);" onclick="myFunction()" class="btn btn-sm btn-clean btn-icon datatable-record-delete delete" data-toggle="tooltip" title="حذف"><i class="la la-trash"></i></a>--}}
    </form>

@endif
