@if ($paginator->total() > $paginator->perPage())
    <div class="d-flex justify-content-center pt-5">
        <div id="blogPagination">
            @if ($paginator->currentPage() > 1)
                <a href="{{ $paginator->previousPageUrl() }}" style="color: #e3007a">PREVIOUS</a>
            @endif

            <a href="javascript:void(0}" class="text-muted">{{'Page ' . $paginator->currentPage() . ' of ' . $paginator->lastPage()}}</a>
            
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->url($paginator->lastPage()) }}" style="color: #e3007a">NEXT</a>
            @endif
        </div>
    </div>
@endif
