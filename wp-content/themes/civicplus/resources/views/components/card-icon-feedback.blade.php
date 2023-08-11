<div class="card active {{$class}} js-card">
    <div class="top">
        {!! $image_element !!}
        <h2 class="title">{!! $title !!}</h2>
    </div>

    <p>{!! $description !!}</p>
    {!! $link_element !!}

    <div class="bottom">
        <div class="feedback">
            <p>{!! $feedback !!}</p>
        </div>

        <div class="author">
            <p>{!! $name !!}</p>
            <p>{!! $position !!}</p>
        </div>
    </div>
</div>