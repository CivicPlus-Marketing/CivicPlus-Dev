<div class="card">
    {!! $image_element !!}

    <div class="bottom">
        <h3 class="title">{!! $title !!}</h3>
        @if($subtitle)
            <p class="subtitle">{!! $subtitle !!}</p>
        @endif
        <p>{!! $description !!}</p>

        @if($link)
            {!! $link !!}
        @endif
    </div>
</div>