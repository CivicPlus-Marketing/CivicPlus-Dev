@php($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title'])))

<section id="{{ $id }}" class="cards-section js-cards-section" data-title="{!! $section['acfe_flexible_layout_title'] !!}">
    <div class="container">
        <h2>{!! $section['title'] !!}</h2>
        @if($type != 'empty')
            {!! $section['content'] !!}
        @endif

        @if($section['list'])
            <div class="cards-row splide js-cards-slider" role="group" aria-label="{{ $section['title'] }}">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach($section['list'] as $item)
                            <li class="splide__slide">
                                <x-card :data="$item" :withSubtitle="$with_subtitle"/>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
</section><!-- {{ $id }} -->