@php($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title'])))

<section id="{{ $id }}" class="products-section" data-title="{!! $section['acfe_flexible_layout_title'] !!}">
    <div class="container">
        @if($section['title'])
            <h2>{!! $section['title'] !!}</h2>
        @endif
        @if($section['content'])
            {!! $section['content'] !!}
        @endif

        @if($section['list'])
            <div class="tabs-box js-tab-box">
                <div class="tabs-nav">
                    <div class="left">
                        <button class="tab-nav-item active js-products-nav" title="All" data-product="all">All</button>

                        @foreach($section['list'] as $item)
                            <button class="tab-nav-item js-products-nav" title="{!! $item['category'] !!}"
                                    data-product="product-{{ $loop->index }}">{!! $item['category'] !!}</button>
                        @endforeach
                    </div>
                    <div class="right">
                        {!! cps_button($section['link'], 'learn-more') !!}
                    </div>
                </div>

                <div class="tabs-content">
                    @foreach($section['list'] as $item)
                        @php($index = $loop->index)
                        @foreach($item['products'] as $s_item)
                            @switch($type)
                                @case('home')
                                    <x-card-icon :data="$s_item" :index="$index"/>
                                    @break
                                @case('archive')
                                    <x-card-icon-feedback :data="$s_item" :index="$index"/>
                                    @break
                                @default
                                    <x-card-icon :data="$s_item" :index="$index"/>
                                    @break
                            @endswitch
                        @endforeach
                    @endforeach
                </div>

                @if($section['link'])
                    <div class="bottom">
                        {!! cps_button($section['link'], 'learn-more') !!}
                    </div>
                @endif
            </div>
        @endif

    </div>
</section><!-- #{{ $id }} -->