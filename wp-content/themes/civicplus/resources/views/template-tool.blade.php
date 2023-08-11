{{--
  Template Name: Tool
--}}
@extends('layouts.app')

@section('content')
    @include('sections.hero', array('hero' => $hero, 'video' => false))

    @if($content)
        @foreach($content as $section)
            @switch($section['acf_fc_layout'])
                @case('about')
                    @include('sections.tool-about', array('section' => $section, 'index' => $loop->index))
                    @break
                @case('features')
                    @include('sections.cards-icon', array('section' => $section, 'index' => $loop->index))
                    @break
                @case('partners')
                    @include('sections.partners', array('section' => $section, 'index' => $loop->index))
                    @break
                @case('integrations')
                    @include('sections.cards-icon', array('section' => $section, 'index' => $loop->index))
                    @break
                @case('faq')
                    @include('sections.faqs', array('section' => $section, 'index' => $loop->index, 'is_hidden' => false))
                    @break
                @default
            @endswitch
        @endforeach
    @endif

    @include('sections.demo', array('demo' => $demo))
@endsection