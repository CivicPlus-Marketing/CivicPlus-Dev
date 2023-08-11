@php($id = 'video')
@if($index > 0)
    @php($id = 'video-' . $index )
@endif

<section id="{{ $id }}" class="video-section">
    <div class="container">
        <div class="left">
            <h2>{!! $section['title'] !!}</h2>

            @if($section['list'])
                <div class="icons-box {{ $section['type'] }}">
                    @foreach($section['list'] as $item)
                        <div class="row">
                            {!! wp_get_attachment_image( $item['image'], 'full' ) !!}

                            @if($section['type'] != 'simple')
                                <p>{!! $item['title'] !!}</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="right">
            <div class="youtube js-youtube" data-embed="{{ $section['video_id'] }}"></div>
        </div>

    </div>
</section><!-- {{ $id }} -->