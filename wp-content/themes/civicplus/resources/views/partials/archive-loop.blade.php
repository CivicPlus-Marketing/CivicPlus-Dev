@php($loop = new WP_Query($args))
<div class="archive-box">
    @if($loop->have_posts())
        <div class="archive-list js-archive-list">
            @while ( $loop->have_posts() )
                @php($loop->the_post())
                @php($id = get_the_ID())
                @if($post_type['name'] == 'case-studies')
                    <x-case-card :id="$id"/>
                @else
                    <x-post-card :id="$id"/>
                @endif
            @endwhile
        </div>
    @endif
</div>


