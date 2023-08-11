@php($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title'])))

<section id="{{ $id }}" class="cases-section js-cases-section" data-title="{!! $section['acfe_flexible_layout_title'] !!}">
    <div class="container">
        <h2>{!! $section['title'] !!}</h2>
        {!! $section['content'] !!}

        @if($section['list'])
            <div id="logos-carousel" class="splide logos-slider js-logos-slider" role="group"
                 aria-label="{!! $section['title'] !!}">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach($section['list'] as $item)
                            <li class="splide__slide">
                                {!! wp_get_attachment_image($item['logo'], 'full') !!}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        @if($section['list'])
            <div id="cases-carousel" class="splide cases-slider js-cases-slider" role="group"
                 aria-label="{{ $section['title'] }}">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach($section['list'] as $item)
                            <li class="splide__slide">
                                <div class="left">
                                    <div class="comment-box">
                                        {!! $item['content'] !!}
                                    </div>

                                    <div class="author-box">
                                        {!! wp_get_attachment_image($item['logo'], 'full') !!}

                                        <div class="info">
                                            <p class="name">{{ $item['name'] }}</p>
                                            <p class="position">{{ $item['position'] }}</p>
                                        </div>
                                    </div>

                                    @if($item['link'])
                                        <a href="{{ $item['link']['url'] }}" title="{{ $item['link']['title'] }}" target="{{ $item['link']['target'] }}" class="learn-more">
                                            {!! $item['link']['title'] !!}
                                        </a>
                                    @endif
                                </div>
                                <div class="right">
                                    {!! wp_get_attachment_image($item['image'], 'full') !!}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
</section><!-- {{ $id }} -->