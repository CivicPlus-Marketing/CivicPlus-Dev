@php($id = 'faqs')
@if($index > 0)
    @php($id = 'faqs-' . $index )
@endif

@if(!$is_hidden)
    <section id="{{ $id }}" class="faqs-section">
        <div class="container">
            <h2>{!! $section['title'] !!}</h2>

            @if($section['list'])
                <div class="faqs-box">
                    @foreach($section['list'] as $item)
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
    </section><!-- {{ $id }} -->
@endif