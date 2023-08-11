<div class="author-box">
    {!! $image !!}

    <div class="info">
        <p class="name">{!! $name !!} <a href="{{ $linkedin }}" title="{!! $name !!}" class="linkedin"></a></p>
        <p class="position">{!! $position !!}</p>

        @if($detail)
            {!! $description !!}
        @endif
    </div>
</div>