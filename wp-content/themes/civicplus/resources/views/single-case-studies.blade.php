@extends('layouts.app')

@section('content')
    <section id="hero" class="hero-section @if($hero['with_gradient']) with-gradient @endif"
             style="background-image: url({{  $hero['hero_image'] }})">
        <div class="container">
            <x-breadcrumbs type="case-studies"/>

            <div class="left">
                <x-share/>

                <h1>{!! $title !!}</h1>
                @if($hero['keys_to_project'])
                    <div class="row first">
                        <p>{{ _x('Keys to Project: :', 'sage') }}</p>
                        <p>{!! $hero['keys_to_project'] !!}</p>
                    </div>
                @endif
                @if($hero['city_country'])
                    <div class="row">
                        <p>{!! $municipality[0]->name !!}:</p>
                        <span class="case-label">{!! $hero['city_country'] !!}</span>
                    </div>
                @endif
                @if($hero['population'])
                    <div class="row">
                        <p>{{ _x('Population:', 'sage') }}</p>
                        <span class="case-label population">{!! $hero['population'] !!}</span>
                    </div>
                @endif
                @if($hero['products'])
                    <div class="row products">
                        <p>{{ _x('Products:', 'sage') }}</p>

                        <div class="list">
                            @foreach($hero['products'] as $product)
                                {!! cps_button($product['link'], 'case-label product') !!}
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <div class="right">
                @if($hero['challenge'] || $hero['solution'] || $hero['result'])
                    <div class="info-box">
                        <div class="logo-box">
                            {!! wp_get_attachment_image($hero['logo'],'full') !!}
                        </div>
                        @if($hero['challenge'])
                            <div class="box">
                                <p class="title">{{ _x('Challenge:', 'sage') }}</p>
                                <p>{!! $hero['challenge'] !!}</p>
                            </div>
                        @endif
                        @if($hero['solution'])
                            <div class="box">
                                <p class="title">{{ _x('Solution:', 'sage') }}</p>
                                <p>{!! $hero['solution'] !!}</p>
                            </div>
                        @endif

                        @if($hero['result'])
                            <div class="box">
                                <p class="title">{{ _x('Result:', 'sage') }}</p>
                                <p>{!! $hero['result'] !!}</p>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </section><!-- #hero -->

    <section id="content" class="content-section">
        <div class="container">
            <div class="post-nav">
                <div class="post-nav-box">
                    <ul class="post-navigation js-post-navigation">
                    </ul>
                </div>
            </div>
            <div class="content js-content">
                @foreach($content as $item)
                    @switch($item['acf_fc_layout'])
                        @case('simple')
                            <div class="content-box">
                                {!! $item['content'] !!}
                            </div>
                            @break
                        @case('video')
                            <x-video-wistia :id="$item['video']['id']" />
                            @break
                        @case('feedback')
                            <x-feedback-box :data="$item" />
                            @break
                    @endswitch
                @endforeach
            </div>
        </div>
    </section>

    @include('sections.demo', array('demo' => $demo))
@endsection
