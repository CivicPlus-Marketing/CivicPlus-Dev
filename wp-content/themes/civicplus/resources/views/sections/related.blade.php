@if($section['list'])
    <section id="related" class="related-section">
        <div class="container">
            <h2>{!! $section['title'] !!}</h2>

            <div class="list">
                @foreach($section['list'] as $item)
                    <x-post-card :id="$item" />
                @endforeach
            </div>

            {!! cps_button($section['link'], 'learn-more') !!}
        </div>
    </section>
@endif