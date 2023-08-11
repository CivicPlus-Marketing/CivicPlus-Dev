{{--
  Template Name: History
--}}
@extends('layouts.app')

@section('content')
    <section id="hero" class="hero-section"
             style="background-image: url({{ wp_get_attachment_image_url( $hero['image'], 'full' ) }})">
        <div class="container">
            <div class="content">
                <x-breadcrumbs type="about"/>
                <h1>{!! $hero['title'] !!}</h1>
                {!! $hero['subtitle'] !!}

                @if($hero['columns'])
                    <div class="columns">
                        @foreach($hero['columns'] as $item)
                            <div class="col">
                                <p class="title">{!! $item['title'] !!}</p>
                                <p>{!! $item['description'] !!}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

        </div>
    </section>

    @if($hero['images'])
        <section class="history-slider js-history-slider splide" aria-label="History Slider">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach($hero['images'] as $image)
                        <li class="splide__slide">
                            {!! wp_get_attachment_image($image, 'full') !!}
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    @endif

    @if($content)
        @foreach($content as $section)
            @switch($section['acf_fc_layout'])
                @case('history')
                    <div id="history" class="history-section">
                        <div class="container">
                            @if($section['list'])
                                <div class="content">
                                    @foreach($section['list'] as $item)
                                        <div class="date-box">
                                            <div class="left">
                                                <p>{!! $item['date'] !!}</p>
                                            </div>
                                            <div class="right">
                                                {!! wp_get_attachment_image($item['image'], 'full') !!}
                                                {!! $item['text'] !!}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>                    @break
                @case('image_text')
                    @include('sections.image-text', array('section' => $section, 'with_box' => false))
                    @break
                @default
            @endswitch

        @endforeach
    @endif

    @include('sections.demo', array('demo' => $demo))

@endsection
