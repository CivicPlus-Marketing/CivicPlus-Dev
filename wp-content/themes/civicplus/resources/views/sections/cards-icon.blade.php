@php($id = 'cards-icon')
@if($index > 0)
    @php($id = 'cards-icon-' . $index )
@endif

<section id="{{ $id }}" class="cards-icon-section">
    <div class="container">
        @if(!$simple)
            <span class="tag">{!! $section['tag'] !!}</span>
        @endif
        <h2>{!! $section['title'] !!}</h2>
        @if(!$simple)
            @if($section['content'])
                <div class="content">
                    {!! $section['content'] !!}
                </div>
            @endif
        @endif
        @if($section['list'])
            <div class="cards-row">
                @foreach($section['list'] as $item)
                    <x-card-icon :data="$item" :index="$loop->index"/>
                @endforeach
            </div>
        @endif
    </div>
</section><!-- {{ $id }} -->