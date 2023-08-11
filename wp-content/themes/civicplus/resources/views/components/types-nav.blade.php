<div class="types-nav">
    @foreach($types as $type)
        <a href="{{ $type['link'] }}" data-type="{{ $type['type'] }}" class="types-nav-item {{ $type['class'] }} {{ $type['link'] == $current_link ? 'active' : null }} js-types-nav-item">{!! $type['title'] !!}</a>
    @endforeach
</div>
