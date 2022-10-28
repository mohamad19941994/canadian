{{--<ul class="pagination justify-content-center primary-theme">
    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-long-arrow-alt-left"></i></a></li>
    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
    <li class="page-item"><a class="page-link" href="#">2</a> </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
</ul>--}}

@if ($paginator->hasPages())
    <ul class="pagination justify-content-center primary-theme">
        @if ($paginator->hasMorePages())
            <li class="page-item disabled"><a class="page-link" href="javascript:;"><i class="fas fa-long-arrow-alt-right"></i></a></li>
        @else
            <li class="page-item next-page"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-long-arrow-alt-right"></i></a></li>
        @endif
        @foreach ($elements as $element)

            @if (is_string($element))
                    <li class="page-item active"><a class="page-link" href="javascript:;">{{ $element }} <span class="sr-only">(current)</span></a></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><a class="page-link" href="javascript:;">{{ $page }} <span class="sr-only">(current)</span></a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }} <span class="sr-only">(current)</span></a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->onFirstPage())
            <li class="page-item "><a class="page-link" href="{{ $paginator->nextPageUrl() }}" tabindex="-1"><i class="fas fa-long-arrow-alt-left"></i></a></li>
        @else
            <li class="page-item disabled"><a class="page-link" href="javascript:;" tabindex="-1"><i class="fas fa-long-arrow-alt-left"></i></a></li>
        @endif
    </ul>
@endif