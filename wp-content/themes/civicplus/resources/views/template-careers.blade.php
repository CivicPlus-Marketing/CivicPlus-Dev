{{--
  Template Name: Careers
--}}
@extends('layouts.app')

@section('content')
    @include('sections.hero', array('hero' => $hero, 'breadcrumbs' => 'about', 'video' => false))

    @if($content)
        @foreach($content as $section)
            @switch($section['acf_fc_layout'])
                @case('offices')
                    @break
                @case('image_text')
                    @include('sections.image-text', array('section' => $section, 'with_box' => false))
                    @break
                @case('process')
                    @break
                @case('values')
                    @break
                @case('more')
                    @break
                @default
            @endswitch

        @endforeach
    @endif

    @include('sections.demo', array('demo' => $demo))

@endsection
