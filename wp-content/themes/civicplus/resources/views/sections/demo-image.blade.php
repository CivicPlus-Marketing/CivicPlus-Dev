@if(!$demo['is_it_hidden'])
    <section id="demo" class="demo-section">
        <div class="container">
            <div class="left">
                <p class="tag">{!! $demo['tag'] !!}</p>
                <h2>{!! $demo['title'] !!}</h2>
                {!! $demo['subtitle'] !!}
                @if($demo['buttons'])
                    <div class="buttons-row">
                        @foreach($demo['buttons'] as $item)
                            {!! cps_button($item['link'], $item['type']) !!}
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="right">
                {!! wp_get_attachment_image( $demo['image'], 'full' ) !!}
            </div>
        </div>
    </section><!-- #demo -->
@endif
