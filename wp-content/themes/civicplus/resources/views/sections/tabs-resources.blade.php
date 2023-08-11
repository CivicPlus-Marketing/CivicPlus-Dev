@php($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title'])))

<section id="{{ $id }}" class="tabs-resources-section" data-title="{!! $section['acfe_flexible_layout_title'] !!}">
    <div class="container">
        @if($section['title'])
            <h2>{!! $section['title'] !!}</h2>
        @endif

        @if($section['list'])
            <div class="tabs-box js-tabs">
                <div class="tabs-nav">
                    <div class="left">
                        @foreach($section['list'] as $item)
                            <button class="tab-nav-item js-tabs-nav"
                                    title="{!! $item['category'] !!}">{!! $item['category'] !!}</button>
                        @endforeach
                    </div>
                    <div class="right">
                        {!! cps_button( $section['link'], 'learn-more') !!}
                    </div>
                </div>

                <div class="tabs-content">
                    @foreach($section['list'] as $item)
                        <div class="tabs-body js-tabs-body">
                            <div class="top">
                                @php($post_type = get_post_type($item['resources'][0]))
                                @if($post_type == 'case-studies')
                                    <x-case-card :id="$item['resources'][0]"/>
                                @else
                                    <x-post-card :id="$item['resources'][0]"/>
                                @endif
                            </div>
                            <div class="bottom resources-slider splide js-resources-slider" role="group"
                                 aria-label="{{ $section['title'] }} - {{$item['category']}}">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @foreach($item['resources'] as $id)
                                            @if($loop->index > 0)
                                                @php($post_type = get_post_type($id))
                                                @if($post_type == 'case-studies')
                                                    <li class="splide__slide">
                                                        <x-case-card :id="$id"/>
                                                    </li>
                                                @else
                                                    <li class="splide__slide">
                                                        <x-post-card :id="$id"/>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</section><!-- #{{ $id }} -->