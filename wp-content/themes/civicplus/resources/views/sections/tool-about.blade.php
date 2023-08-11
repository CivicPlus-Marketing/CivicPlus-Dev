@php($id = 'about')
@if($index > 0)
    @php($id = 'about-' . $index )
@endif
<section id="{{ $id }}" class="about-section">
    <div class="container">
        <h2>{!! $section['title'] !!}</h2>
        @if($section['content'])
            @foreach($section['content'] as $item)
                <div class="row">
                    <div class="text-box">
                        {!! $item['content'] !!}
                    </div>

                    <div class="image-box">
                        {!! wp_get_attachment_image( $item['image'], 'full' ) !!}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section><!-- {{ $id }} -->