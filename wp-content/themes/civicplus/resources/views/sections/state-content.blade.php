@php($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title'])))
<section id="{{ $id }}" class="content-section">

    <div class="container">
        <div class="content">
            @foreach($section['content'] as $content)
                <div class="content-box">
                    <div class="text-box">
                        {!! $content['content'] !!}
                    </div>

                    @if($content['dropdown_list'])
                        <div class="dropdown-list">
                            @foreach($content['dropdown_list'] as $item)
                                @if($loop->index == 0)
                                    @php($active = 'is-active')
                                @else
                                    @php($active = '')
                                @endif

                                <x-faq :data="$item" :active="$active"/>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        <x-sidebar-state :data="$section['sidebar']"/>
    </div>
</section><!-- #{{ $id }} -->
