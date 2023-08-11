@if(!$demo['is_it_hidden'])
    <section id="demo" class="demo-section">
        <div class="container">
            <h2>{!! $demo['title'] !!}</h2>
            <p>{!! $demo['subtitle'] !!}</p>

            @if($demo['type'] == 'type_a')
                <div class="columns-row">
                    @foreach($demo['list'] as $item)
                        <div class="col" data-num="{{ $loop->index + 1 }}">
                            {!! wp_get_attachment_image( $item['image'], 'full' ) !!}
                            <p>{!! $item['title'] !!}</p>
                        </div>
                    @endforeach
                </div>
            @endif

            @if($demo['buttons'])
                <div class="buttons-row">
                    @foreach($demo['buttons'] as $item)
                        {!! cps_button($item['link'], $item['type']) !!}
                    @endforeach
                </div>
            @endif
        </div>
    </section><!-- #demo -->
@endif
