<aside class="topics-nav">
    <p class="title">{!! __('Topic', 'sage') !!}</p>

    <a href="{{ $link }}" data-type="all"
       class="topics-nav-item {{ $current_link == $link ? 'active' : null }} js-topics-nav-item">{!! __('All', 'sage') !!}</a>
    @foreach($topics as $topic)
        @if($post_type['type'] == 'resources')
        <a href="{{ $link . '?topic=' . $topic['slug'] }}" data-type="{{ $topic['slug'] }}"
           class="topics-nav-item {{ $topic['slug'] == $active_topic  ? 'active' : null }} js-topics-nav-item">{!! $topic['name'] !!}</a>
        @else
            <a href="{{ $link . $topic['slug'] }}" data-type="{{ $topic['slug'] }}"
                class="topics-nav-item {{ $topic['slug'] == $active_topic || $link . $topic['slug'] . '/' == $current_link ? 'active' : null }} js-topics-nav-item">{!! $topic['name'] !!}</a>
        @endif
    @endforeach
</aside>
