@php($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title'])))

<section id="{{ $id }}" class="awards-section">
    <div class="container">
        <h2><span>{!! $section['title'] !!}</span><br>{!! $section['subtitle'] !!}</h2>

        @if($section['list'])
            <div class="list">
                @foreach($section['list'] as $item)
                    <x-award-card :id="$item" />
                @endforeach
            </div>
        @endif
    </div>
</section><!-- {{ $id }} -->