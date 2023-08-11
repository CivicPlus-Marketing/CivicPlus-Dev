@if($link)
    <a href="{{ $link['url'] }}"
       title="{!! $link['title'] !!}"
       target="{{ $link['target'] }}"
       class="submenu-link">
        {!! wp_get_attachment_image($image, 'menu-icon') !!}
        <div>
            <span>{!! $link['title'] !!}</span>
            <p>{!! $description !!}</p>
        </div>
    </a>
@endif