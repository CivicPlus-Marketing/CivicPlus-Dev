@if( $section['title'])
    <section id="hero" class="hero-section" style="background-image: url({{ $section['image'] }})">
        <div class="container">
            <h1>{!! $section['title'] !!}</h1>
            <p>{!! $section['subtitel'] !!}</p>
        </div>
    </section><!-- #hero -->
@endif
