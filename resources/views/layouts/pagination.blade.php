@if (($items->total() / $items->perPage()) > 1 )
  <div class="row">
    <nav aria-label="pageNavigation">
      <ul class="pagination">

        @if ($items->currentPage() != $items->firstItem())
          <li class="page-item"><a class="page-link" href="{{$items->previousPageUrl()}}">Previous</a></li>
        @endif

        @for ($i=1; $i <= ceil($items->total() / $items->perPage()); $i++)
          <li class="page-item"><a class="page-link" href="{{url()->current()}}?page={{$i}}">{{ $i }}</a></li
        @endfor
        @if ($items->hasMorePages())
          <li class="page-item"><a class="page-link" href="{{$items->nextPageUrl()}}">Next</a></li>
        @endif
      </ul>
    </nav>
  </div>
@endif
