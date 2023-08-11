@php($id = 'tools')
@if($index > 0)
    @php($id = 'tools-' . $index )
@endif

<section id="{{ $id }}" class="tools-section">
    <div class="container">
        @if($section['title'])
            <h2>{!! $section['title'] !!}</h2>
        @endif
        @if($section['content'])
            {!! $section['content'] !!}
        @endif

        @if($section['list'])
            <div class="tools-list">
                @foreach($section['list'] as $item)
                    @php($index = $loop->index)
                    <x-card-icon :data="$item" :index="$index"/>
                @endforeach
            </div>
        @endif
    </div>
</section><!-- {{ $id }} -->