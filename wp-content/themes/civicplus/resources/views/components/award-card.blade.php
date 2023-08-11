<div class="award-card">
    {!! $image !!}

    <div class="bottom">
        <h3>{!! $title !!}</h3>
        <p class="case-label population"><b>{{ _x('Population:', 'sage') }}&ensp;</b>{!! $population !!}</p>
        <p>{!! $subtitle !!}</p>
        {!! cps_button($link, 'learn-more') !!}
    </div>
</div>