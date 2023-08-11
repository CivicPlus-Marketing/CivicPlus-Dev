@if($title)
    <section id="hero" class="hero-section @if($with_gradient) with-gradient @endif"
             style="background-image: url({{ $hero_image }})">
        <div class="container">
            <x-breadcrumbs type="resources"/>
            <div class="content">
                <div class="left">
                    <div class="top">
                        @if($category)
                            <span class="category"># {!! $category[0]->name !!}</span>
                        @endif

                        <x-share/>
                    </div>

                    <h1>{!! $title !!}</h1>
                    <p>{!! $subtitle !!}</p>

                    @if($webinars)
                        <div class="data-time-box">
                            <div class="date">{!! $date !!}</div>
                        </div>
                    @endif
                </div>
                <div class="right">
                    @if($form)
                        {!! hubSpotForm($form) !!}
                    @endif
                </div>
            </div>

        </div>
    </section><!-- #hero -->
@endif
