@if($link)
<a href="{{ $link['url'] }}"  target="{{ $link['target'] }}" title="{{ $title }}" class="card active {{$class}} js-card">
    {!! $image_element !!}
    <h3 class="title">{!! $title !!}</h3>
    <div class="description">{!! $description !!}</div>
    {!! $link_element !!}
</a>
    @else
    <div class="card active {{$class}} js-card">
        {!! $image_element !!}
        <h3 class="title">{!! $title !!}</h3>
        <div class="description">{!! $description !!}</div>
        {!! $link_element !!}
    </div>
@endif


