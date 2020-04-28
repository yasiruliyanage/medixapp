     <div class="site-pagination">
@if ($paginator->hasPages())
 <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center " >
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled page-item  "><span class="page-link" >← </span></li>
        @else
            <li class="page-item "><a  class="page-link memberpagination" href="{{ $paginator->previousPageUrl() }}" rel="prev">← </a></li>
        @endif


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled page-item "><span class="page-link">{{ $element }}</span></li>
            @endif


            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active my-active "><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item n "><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item "><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"> →</a></li>
        @else
            <li class=" page-item disabled "><span class="page-link"> →</span></li>
        @endif
    </ul>
		 </nav>
@endif


</div>