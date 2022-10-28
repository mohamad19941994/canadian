@if (auth()->user()->hasPermission('update_service_categories'))
    <a href="{{ route('admin.service_categories.edit', $id) }}">
        <button type="button" class="btn btn-outline-primary">تعديل</button>
    </a>
@endif

@if (auth()->user()->hasPermission('delete_service_categories'))

    <form action="{{ route('admin.service_categories.destroy', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-danger delete">@lang('site.delete')</button>
    </form>

@endif
