<a href="{{ $link }}" title="{{ $title }}" class="post-card">
    {!! $image !!}

    <div class="bottom">
        <h3>{!! $title !!}</h3>

        <div class="row">
            @foreach($solution as $item)
                <p class="case-label product">{!! $item->name !!}</p>
            @endforeach
        </div>
        <div class="row">
            <p class="case-label">{!! $municipality[0]->name !!}</p>
            <p class="case-label population"><b>{{ _x('Population:', 'sage') }}</b>&nbsp;{!! $population !!}</p>
        </div>
        <p class="subtitle">{!! $subtitle !!}</p>
    </div>
</a>
