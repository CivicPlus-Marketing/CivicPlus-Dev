<aside class="sidebar">
    <div class="sticky-box">
        <p class="title">{!! $title !!}</p>

        @if(count($list) > 0)
            <div class="links">
                @foreach($list as $item)
                    <div class="row">
                        <a href="{{ $item['link']['url'] }}" title="{!! $item['link']['title'] !!}" target="{!! $item['link']['target'] !!}">{!! $item['link']['title'] !!}</a>
                        <p>{!! $item['text'] !!}</p>
                    </div>
                @endforeach
            </div>
        @endif

        @if($cta['title'])
            <div class="cta-box">
                <p class="title">{!! $cta['title'] !!}</p>
                <p>{!! $cta['description'] !!}</p>
                {!! cps_button($cta['link'], 'btn-red') !!}
            </div>
        @endif
    </div>
</aside>