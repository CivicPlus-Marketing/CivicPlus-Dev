@php($id = 'partners')
@if($index > 0)
    @php($id = 'partners-' . $index )
@endif
<section id="{{ $id }}" class="partners-section">
    <div class="container">
        <h2>{!! $section['title'] !!}</h2>
        {!! $section['content'] !!}
        @if($section['list'])
            <div class="row">
                @foreach($section['list'] as $item)
                    <div class="image-box">
                        {!! wp_get_attachment_image( $item, 'full' ) !!}
                    </div>
                @endforeach
            </div>

        @endif
    </div>
</section><!-- {{ $id }} -->