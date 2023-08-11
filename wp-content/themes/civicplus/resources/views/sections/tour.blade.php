@php($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title'])))

<section id="{{ $id }}" class="tour-section">
    <div class="container">
        <div class="content">
            {!! wp_get_attachment_image( $section['image'], 'tour' ) !!}

            <div class="info-box">
                <h3>{!! $section['title'] !!}</h3>
                {!! $section['description'] !!}
                {!! cps_button($section['link'], 'btn-red') !!}
            </div>
        </div>
    </div>
</section><!-- {{ $id }} -->