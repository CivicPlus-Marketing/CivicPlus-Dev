@if($list)
    <div class="breadcrumbs">
        @foreach($list as $item)
            @if($item['link'])
                <a href="{{ $item['link'] }}" title="{!! $item['title'] !!}">{!! $item['title'] !!}</a>
                <i class="icon-Chevron-right"></i>
            @else
                <p @if($loop->index == 0) class="uppercase"@endif>{!! $item['title'] !!}</p>@if($loop->index == 0) <i class="icon-Chevron-right"></i> @endif
            @endif
        @endforeach
    </div>
@endif