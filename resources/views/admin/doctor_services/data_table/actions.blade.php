@if (auth()->user()->hasPermission('update_doctor_services'))
    <a href="{{ route('admin.doctor_services.edit', $id) }}">
        <button type="button" class="btn btn-outline-primary">تعديل</button>
    </a>
@endif

@if (auth()->user()->hasPermission('delete_doctor_services'))

    <form action="{{ route('admin.doctor_services.destroy', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-danger delete">@lang('site.delete')</button>
    </form>

@endif
