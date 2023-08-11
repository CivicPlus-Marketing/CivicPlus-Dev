<section id="archive" class="archive-section">
    <div class="container">
        <div class="content">
            <x-topics-nav />

            @include('partials.archive-loop', array('args' => $args))
        </div>
    </div>
</section>
