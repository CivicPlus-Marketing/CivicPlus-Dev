@if ($loop->max_num_pages > 1)
    <div class="pagination js-pagination" data-post-type="{{ $type['name'] }}"
         data-posts-per-page="{{$post_per_page}}" data-type="">
        <ul>
            @if($paged !== 1)
                <li><a href="{!! $link . $paged - 1 !!}" data-page="prev" class="prev">Prev</a></li>
            @endif
            @for($i=1; $i<$loop->max_num_pages + 1; $i++)
{{--                @if($i < 3 || $i == $paged || $i == $paged + 1 || $i == $paged - 1 || $loop->max_num_pages - 2 < $i)--}}
                    <li><a href="{!! $link . $i !!}" data-page="{{$i}}"
                           class="{{$i === $paged ? 'active' : ''}}">{{$i}}</a></li>
{{--                @endif--}}
            @endfor

            @if($paged != $loop->max_num_pages)
                <li><a href="{!! $link . $paged + 1 !!}" data-page="next" class="next">Next</a></li>
            @endif
        </ul>
    </div>
@endif


