<footer id="footer" class="footer">
    <div class="container">
        <div class="top">
            <div class="col">
                <a href="{{ home_url() }}" class="logo" title="CivicPlus Home">
                    {!! $logo !!}
                </a>

                <div>
                    <p class="title">{{ _x('Location', 'sage') }}</p>

                    <p>{!! $location !!}</p>

                    <a href="tel: {{ $phone }}" title="Phone: {{ $phone }}">{!! $phone !!}</a>
                </div>

                <div>
                    <p class="title">{{ _x('Awards & Recognition', 'sage') }}</p>

                    <div class="awards">
                        @foreach($awards as $item)
                            {!! wp_get_attachment_image($item, 'full') !!}
                        @endforeach
                    </div>
                </div>
            </div>
            @foreach($footer_menu as $item)
                <div class="col">
                    @foreach($item['buttons'] as $link)
                        @switch($link['acf_fc_layout'])
                            @case('title')
                                <p class="title">{!! $link['title'] !!}</p>
                                @break
                            @case('simple_link')
                                {!! cps_button($link['link'], '') !!}
                                @break
                            @case('bold_link')
                                {!! cps_button($link['link'], 'bold-link') !!}
                                @break
                            @default
                                @break
                        @endswitch
                    @endforeach
                </div>
            @endforeach
        </div>
        <div class="bottom">
            <div class="left">
                <p>{!! $copy !!}</p>
            </div>

            <div class="right">
                @foreach($footer_links as $item)
                    {!! cps_button($item['link'], '') !!}
                @endforeach
            </div>
        </div>
    </div>
</footer><!-- #footer -->
