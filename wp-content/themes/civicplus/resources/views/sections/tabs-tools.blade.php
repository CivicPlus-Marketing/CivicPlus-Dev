@php($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title'])))

<section id="{{ $id }}" class="tools-section" data-title="{!! $section['acfe_flexible_layout_title'] !!}">
    <div class="container">
        <h2>{!! $section['title'] !!}</h2>
        {!! $section['content'] !!}

        @if($section['list'])
            <div class="tabs-box js-tabs">
                <div class="tabs-nav">
                    <div class="left">
                        @foreach($section['list'] as $item)
                            <button class="tab-nav-item js-tabs-nav" title="{!! $item['category'] !!}">{!! $item['category'] !!}</button>
                        @endforeach
                    </div>
                    <div class="right">
                        {!! cps_button($section['link'], 'learn-more') !!}
                    </div>
                </div>

                <div class="tabs-content">
                    @foreach($section['list'] as $item)
                        @php($index = $loop->index)
                        <div class="tabs-body js-tabs-body js-subtabs">
                            <div class="left">
                                @foreach($item['products'] as $s_item)
                                    <button class="tab-subnav-item js-subtabs-nav" title="{!! $s_item['title'] !!}">{!! $s_item['title'] !!}</button>
                                @endforeach
                            </div>
                            <div class="right">
                                @foreach($item['products'] as $s_item)
                                    <div class="subtabs-body js-subtabs-body">
                                        <x-card-icon :data="$s_item" :index="$index"/>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</section><!-- #{{ $id }} -->