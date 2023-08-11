@if(!$breadcrumbs)
    @php($breadcrumbs = 'page')
@endif

@if($hero['title'])
    <section id="hero" class="hero-section" style="background-image: url({{ wp_get_attachment_image_url( $hero['image'], 'full' ) }})">
        <div class="container">
            <div class="content">
                <x-breadcrumbs type="{{ $breadcrumbs }}" />

                <h1>{!! $hero['title'] !!}</h1>
                {!! $hero['subtitle'] !!}

                @if($hero['buttons'])
                    <div class="buttons-row">
                        @foreach($hero['buttons'] as $item)
                            {!! cps_button($item['link'], $item['type']) !!}
                        @endforeach
                    </div>
                @endif
                @if($video)
                    <div class="btn js-open-popup">{!! $hero['button_video'] !!}</div>
                @endif
            </div>
        </div>
    </section><!-- #hero -->
@endif
