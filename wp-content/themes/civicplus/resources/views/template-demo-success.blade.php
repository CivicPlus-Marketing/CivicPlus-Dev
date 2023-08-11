{{--
  Template Name: Demo Success
--}}
@extends('layouts.app')

@section('content')
    @if($hero['title'])
        <section id="hero" class="hero-section"
                 style="background-image: linear-gradient(90deg, #2F030B 30.12%, rgba(47, 3, 11, 0) 82.24%), url({{ $hero['image'] }})">
            <div class="container">
                <x-breadcrumbs type="about" />

                    <div class="row">
                        {!! wp_get_attachment_image($hero['logo'], 'full') !!}

                        <div class="text>">
                            <span class="label">{!! $hero['label'] !!}</span>
                            <h1>{!! $hero['title'] !!}</h1>
                        </div>

                </div>

            </div>
        </section><!-- #hero -->
    @endif

    <section id="content" class="content-section">
        <div class="container">
            <div class="tabs-box js-tab-box js-tabs">
                <div class="left tabs-nav">
                    <p class="title">{{ _x('Software Tour', 'sage') }}</p>
                        @foreach($content as $item)
                            <button class="tab-nav-item js-tabs-nav">{!! $item['title'] !!}</button>
                        @endforeach
                </div>

                <div class="right tabs-content">
                    @foreach($content as $item)
                        <div class="tabs-body js-tabs-body">
                            <x-video-wistia :id="$item['video_id']" />

                            <div class="row">
                                <h2>{!! $item['title'] !!}</h2>

                                <div class="buttons-row">
                                    {!! cps_button($item['link'], 'btn-red') !!}
                                </div>
                            </div>

                            <div class="copy">
                                {!! $item['content'] !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section><!-- #content -->

@endsection