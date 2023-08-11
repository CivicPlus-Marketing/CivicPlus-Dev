@if($title)
    <section id="hero" class="hero-section @if($with_gradient) with-gradient @endif" style="background-image: url({{ $image }})">
        <div class="container">
            <x-breadcrumbs type="resources" />

            <div class="top">
                <span class="category"># {!! $category[0]->name !!}</span>

                <x-share />
            </div>
            <h1>{!! $title !!}</h1>
            <p>{!! $subtitle !!}</p>

            <div class="bottom">
                <x-author :id="$author_id" :detail="false"/>

                <div class="data-time-box">
                    <div class="date">{!! $date !!}</div>
                    <div class="time">{!! $time_to_read !!}</div>
                </div>
            </div>
        </div>
    </section><!-- #hero -->
@endif
