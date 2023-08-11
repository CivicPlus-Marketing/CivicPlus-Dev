{{--
  Template Name: Default Page
--}}
@extends('layouts.app')

@section('content')
    <section id="hero" class="hero-section @if($hero['with_gradient']) with-gradient @endif"
             style="background-image: url({{ $hero['image'] }})">
        <div class="container">
            <x-breadcrumbs type="about" />

            <div class="left">
                <h1>{!! $hero['title'] !!}</h1>
            </div>
            <div class="right">
                <x-video-wistia :id="$hero['video_id']" />
            </div>
        </div>
    </section><!-- #hero -->

    <section id="content" class="content-section">
        <div class="container">
            @foreach($content as $item)
                @switch($item['acf_fc_layout'])
                    @case('content')
                        <div class="content-box {{ $item['type'] }}">
                            <div class="left">
                                {!! $item['content'] !!}
                                {!! cps_button($item['link'], 'btn-red') !!}

                            </div>
                            <div class="right">
                                {!! wp_get_attachment_image( $item['image'], 'full' ) !!}
                            </div>
                        </div>
                        @break
                    @case('feedback')
                        <x-feedback-box :data="$item"/>
                        @break
                @endswitch
            @endforeach
        </div>
    </section>

    @include('sections.demo', array('demo' => $demo))

@endsection
