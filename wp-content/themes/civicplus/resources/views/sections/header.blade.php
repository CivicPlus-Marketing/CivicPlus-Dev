@if($header_links)
    <div class="top-header">
        <div class="container-wide">
            @foreach($header_links as $item)
                @php($link = $item['link'])
                @if($link)
                    <a href="{{ $link['url'] }}" @if($link['target'])class="external"@endif target="{{ $link['target'] }}" title="{!! $link['title'] !!}">
                        {!! $link['title'] !!}
                    </a>
                @endif
            @endforeach
            <a href="tel: {{ $phone }}" title="Phone: {{ $phone }}">{!! $phone !!}</a>
        </div>
    </div>
@endif

<header id="header" class="header">
    <div class="container-wide">
        <div class="left">
            <a href="{{ home_url() }}" class="logo" title="CivicPlus Home">
                {!! $logo !!}
            </a>

            <x-mega-menu :data="$header_menu" />

        </div>
        <div class="right">
            @if($header_buttons)
                @foreach($header_buttons as $item)
                    @php(cps_button($item['link'], $item['type']))
                @endforeach
            @endif
        </div>
    </div>
</header><!-- #header -->
