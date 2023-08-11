@if(!$demo['is_it_hidden'])
    <section id="demo" class="demo-section">
        <div class="container">
            <div class="left">
                <h2>{!! $demo['title'] !!}</h2>
                <p>{!! $demo['subtitle'] !!}</p>
            </div>
            <div class="right">
                @if($demo['form'])
                    {!! hubSpotForm($demo['form']) !!}
                @endif
            </div>
        </div>
    </section><!-- #demo -->
@endif
