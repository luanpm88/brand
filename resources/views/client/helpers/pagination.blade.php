<pagination class="d-flex d-block align-items-center" style="min-height:30px">
    <div class="me-auto"></div>
    <label class="small mb-0 me-3">
        {!! trans('messages.pagination.page_of', [
            'pages' => $pagination["pageCount"] ? $pagination["pageCount"] : '1',
            'page' => $pagination["page"] + 1,
        ]) !!}        
    </label>
    @if ($pagination["pageCount"])
        <ul class="pagination small justify-content-end small align-items-center mb-0 mt-0">
            <li class="page-item {{ $pagination["page"] == 0 ? 'disabled' : '' }}">
                <a class="page-link" href="javascript:;" tabindex="-1" aria-disabled="true" data-page="{{ $pagination["page"]-1 }}"><</a>
            </li>

            @php
                $arr = [];

                if ($pagination["pageCount"] > 7) {
                    if ($pagination["page"] < 3) {
                        for ($i = 0; $i <= $pagination["page"]+3; $i++) {
                            $arr[] = $i;
                        }
                    } else {
                        $arr[] = 0;
                        $arr[] = '...';
                        for ($i = $pagination["page"]-2; $i <= $pagination["page"]+2 && $i < $pagination["pageCount"]; $i++) {
                            $arr[] = $i;
                        }
                    }
                    
                    if ($pagination["page"] < $pagination["pageCount"] - 4) {
                        $arr[] = '...';
                    }
                    if ($pagination["page"] < $pagination["pageCount"] - 3) {
                        $arr[] = $pagination["pageCount"] - 1;
                    }
                    
                } else {
                    for ($i = 0; $i < $pagination["pageCount"]; $i++) {
                        $arr[] = $i;
                    }
                }
            @endphp

            @foreach ($arr as $i)
                @if ($i !== '...')
                    @if ($i == $pagination["page"])
                        <li style="pointer-events: none" class="page-item active" aria-current="page">
                            <span class="page-link">
                                {{ $pagination["page"] + 1 }}
                            </span>
                        </li>                    
                    @else
                        <li class="page-item"><a class="page-link" href="javascript:;" data-page="{{ $i }}">{{ $i + 1 }}</a></li>
                    @endif
                @else
                    ...
                @endif
            @endforeach
            <li class="page-item {{ $pagination["page"] == $pagination["pageCount"]-1 ? 'disabled' : '' }}">
            <a class="page-link" href="javascript:;" data-page="{{ $pagination["page"]+1 }}">></a>
            </li>
        </ul>
    @endif
</pagination>