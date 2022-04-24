<style>
  
</style>


@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link"
                 style="background: transparent;border:none"><i class="fa-solid fa-angle-right" 
                 style="font-weight:bold"></i></li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"
                 rel="prev" style="background: transparent;border:none" ><i class="fa-solid fa-angle-right"
                  style="font-weight:bold"></i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" ><span class="page-link"
                    style="
                    color: #000;
                    font-size: 25px;
                    background: transparent;
                    border: none;
                    margin-top: -6px;"
                    
                    >{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link" >{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link  page-customer" href="{{ $url }}"
                            style="
                            color: #000;
                            font-size: 25px;
                            background: transparent;
                            border: none;
                            margin-top: -6px;"
                            
                            >{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" 
                rel="next" style="background: transparent;border:none"><i class="fa-solid fa-angle-left"></i></a></li>
        @else
            <li class="page-item disabled"><span class="page-link" 
                style="background: transparent;border:none"><i class="fa-solid fa-angle-left"></i></span></li>
        @endif
    </ul>
@endif
