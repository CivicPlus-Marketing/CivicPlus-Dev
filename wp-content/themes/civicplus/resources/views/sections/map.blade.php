@php($id = 'map')
@if($index > 0)
    @php($id = 'map-' . $index )
@endif

<section id="{{ $id }}" class="map-section">
    <div class="container">
        <div class="left">
            <h2>{!! $section['title'] !!}</h2>
            {!! $section['content'] !!}
        </div>
        <div class="right">
            {!! $section['map'] !!}
        </div>
    </div>
</section><!-- {{ $id }} -->