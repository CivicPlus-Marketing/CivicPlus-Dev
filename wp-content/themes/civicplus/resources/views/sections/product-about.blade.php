@php($id = 'about')
@if($index > 0)
    @php($id = 'about-' . $index )
@endif

<section id="{{ $id }}" class="about-section">
    <div class="container">
        <div class="left">
            <h2>{!! $section['title'] !!}</h2>
            {!! $section['content'] !!}
            {!! cps_button($section['link'], 'btn-red') !!}
        </div>

        <div class="right">
            @if($section['list'])
                    @foreach($section['list'] as $item)
                        <div class="row">
                            {!! wp_get_attachment_image( $item['image'], 'full' ) !!}

                            <p>{!! $item['title'] !!}</p>
                        </div>
                    @endforeach
            @endif
        </div>

    </div>
</section><!-- {{ $id }} -->