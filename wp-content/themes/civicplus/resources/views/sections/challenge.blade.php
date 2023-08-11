@php($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title'])))

<section id="{{ $id }}" class="challenge-section {{ $section['type'] }}" data-title="{!! $section['acfe_flexible_layout_title'] !!}">
    <div class="container">
        @if($section['title'])
            <h2>{!! $section['title'] !!}</h2>
        @endif

        <div class="challenge">
            <div class="icon"></div>

            <div class="info">
                {!! $section['challenge'] !!}
            </div>
        </div>

        <div class="solution">
            <div class="info">
                {!! $section['solution'] !!}
            </div>

            @if($section['product'])
                <div class="product">
                    <p class="h5">{!! $section['product']['title'] !!}</p>

                    @if($section['product']['link'])
                        <a href="{{ $section['product']['link']['url'] }}" title="{!! $section['product']['name'] !!}">
                            {!! wp_get_attachment_image($section['product']['logo'], 'full') !!}

                            <div class="info">
                                <p class="title">{!! $section['product']['name'] !!}</p>

                            </div>

                            <span class="learn-more">{!! $section['product']['link']['title'] !!}</span>

                        </a>
                    @endif

                </div>
            @endif
        </div>

        @if($section['case_study']['content'])
            <div class="case-study">
                <div class="left">
                    {!! wp_get_attachment_image($section['case_study']['image'], 'full') !!}
                </div>
                <div class="right">
                    <div class="comment-box">
                        {!! $section['case_study']['content'] !!}
                    </div>

                    <div class="author-box">
                        {!! wp_get_attachment_image($section['case_study']['logo'], 'full') !!}

                        <div class="info">
                            <p class="name">{{ $section['case_study']['name'] }}</p>
                            <p class="position">{{ $section['case_study']['position'] }}</p>
                        </div>
                    </div>

                    @if($section['case_study']['link'])
                        <a href="{{ $section['case_study']['link']['url'] }}"
                           title="{{ $section['case_study']['link']['title'] }}"
                           target="{{ $section['case_study']['link']['target'] }}" class="learn-more">
                            {!! $section['case_study']['link']['title'] !!}
                        </a>
                    @endif
                </div>
            </div>
        @endif
    </div>
</section><!-- #{{ $id }} -->
