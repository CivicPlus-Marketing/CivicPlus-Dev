<section id="archive" class="archive-section">
    <div class="container">
        <x-types-nav/>

        <div class="content">
            <x-topics-nav/>

            @include('partials.archive-loop', array('args' => $args))

        </div>
        @php($loop = new WP_Query($args))

        @if(!is_page_template('template-resources.blade.php'))
            <x-pagination :type="$post_type" :perPage="10" :loop="$loop"/>
        @endif
    </div>
</section>
