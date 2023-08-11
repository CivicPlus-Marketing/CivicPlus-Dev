@php($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title'])))

<section id="{{ $id }}" class="image-text-section {{ $section['type'] }}">
    <div class="container">
        <div class="left">
            {!! $section['content'] !!}
            {!! cps_button($section['link'], 'btn-red') !!}
        </div>
        <div class="right">
            {!! wp_get_attachment_image( $section['image'], 'full' ) !!}
        </div>

        @if($with_box)
            <div class="box">
                {!! $section['content_box'] !!}
            </div>
        @endif
    </div>
</section><!-- #{{ $id }} -->
