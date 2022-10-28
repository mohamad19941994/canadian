@if (auth()->user()->hasPermission('update_works'))
    <a href="{{ route('admin.works.edit', $id) }}">
        <button type="button" class="btn btn-outline-primary">تعديل</button>
    </a>
@endif

@if (auth()->user()->hasPermission('delete_works'))

    <form action="{{ route('admin.works.destroy', $id) }}" class="my-1 my-xl-0" id="my_form" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-danger delete">@lang('site.delete')</button>
    </form>

@endif
