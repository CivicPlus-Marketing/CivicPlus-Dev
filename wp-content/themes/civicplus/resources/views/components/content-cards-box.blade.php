<div class="product">
    <div class="title">
        {!! $image !!}
        <h2>{!! $title !!}</h2>
    </div>
    <div class="text">
        {!! $content !!}
    </div>

    <div class="cards-row">
        @foreach($list as $item)
            <x-card-icon :data="$item" :index="$loop->index"/>
        @endforeach
    </div>

    @if($feedback)
        <div class="quote-block">
            <div class="quote">
                {!! $feedback['content'] !!}
            </div>
            <p class="name">{!! $feedback['name'] !!}</p>
            <p class="position">{!! $feedback['position'] !!}</p>
        </div>
    @endif
</div>
