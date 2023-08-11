<div class="feedback-box">
    <div class="copy">
        {!! $content !!}
    </div>

    <p class="name">{!! $name !!}</p>
    <p class="position">{!! $position !!}</p>

    @if($link)
        <a href="{{ $link['url'] }}" class="learn-more" title="{!! $link['title'] !!}" target="{{ $link['target'] }}">{!! $link['title'] !!}</a>
    @endif
</div>