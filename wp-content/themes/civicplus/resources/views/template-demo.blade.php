{{--
  Template Name: Demo
--}}
@extends('layouts.app')

@section('content')
    @if($hero['title'])
        <section id="hero" class="hero-section"
                 style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url({{ wp_get_attachment_image_url( $hero['image'], 'full' ) }})">
            <div class="container">
                <div class="content">
                    <h1>{!! $hero['title'] !!}</h1>
                    {!! $hero['subtitle'] !!}

                    @if($hero['buttons'])
                        <div class="buttons-row">
                            @foreach($hero['buttons'] as $item)
                                {!! cps_button($item['link'], $item['type']) !!}
                            @endforeach
                        </div>
                    @endif
                </div>

            </div>
        </section><!-- #hero -->
    @endif

    <section id="content" class="content-section">
        <div class="container">
            <div class="left">
                @foreach($buttons as $button)
                    @if($button['link'])
                        <a href="{{ $button['link']['url'] }}" title="{{ $button['link']['title'] }}"
                           @if($current_link == $button['link']['url'])class="active"@endif>
                            {!! wp_get_attachment_image($button['logo'], 'full') !!}
                            <span>{!! $button['link']['title'] !!}</span>
                        </a>
                    @endif
                @endforeach
            </div>

            <div class="right">
                <div class="content">
                    {!! $content['content'] !!}
                </div>

                @if($content['form'])
                    {!! hubSpotForm($content['form']) !!}
                @endif
            </div>
        </div>
    </section><!-- #content -->

@endsection