{{--
  Template Name: State
--}}
@extends('layouts.app')

@section('content')
    <section id="hero" class="hero-section" style="background-image: linear-gradient(to right, #000000, #1C1C1C00), url({{ wp_get_attachment_image_url( $hero['image'], 'full' ) }})">
        <div class="container">
            <x-breadcrumbs type="page" />

            <h1>{!! $hero['title'] !!}<br>
            <span>{!! $hero['state'] !!}</span>
            </h1>
        </div>
    </section><!-- #hero -->

    @if($content)
        @foreach($content as $section)
            @switch($section['acf_fc_layout'])
                @case('content')
                    @include('sections.state-content', array('section' => $section))
                    @break
                @case('image_text')
                    @include('sections.image-text', array('section' => $section, 'with_box' => true))
                    @break
                @default
            @endswitch
        @endforeach
    @endif

    @include('sections.demo-image', array('demo' => $demo))

@endsection
