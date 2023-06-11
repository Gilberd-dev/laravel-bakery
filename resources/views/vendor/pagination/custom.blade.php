<nav aria-label="Page navigation example">
@if ($paginator->hasPages())
    <ul class="pagination flex-wrap">
       
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><a class="page-link">Previous</a></li>
        @else
            <li class="page-item active"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a></li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="page-item disabled"><a class="page-link" style="border-radius:50%; ">{{ $element }}</a></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><a href="" class="page-link" style="border-radius:100px; background-color:#333C4A; border-color: white; width:35px;">{{ $page }}</a></li>
                    @else
                        <li class="page-item disbled"><a href="{{ $url }}" class="page-link text-secondary" style="border-radius:100px; width:35px;">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li class="page-item active"><a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next">Next</a></li>
        @else
            <li class="page-item disabled"><a href="" class="page-link">Next</a></li>
        @endif
    </ul>
@endif 

<!-- <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav> -->
