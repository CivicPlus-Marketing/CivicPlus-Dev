{{--
  Template Name: Product
--}}
@extends('layouts.app')

@section('content')
    @include('sections.modal-video')

    @include('sections.hero', array('hero' => $hero, 'video' => true))

    @if($content)
            @foreach($content as $section)
                @switch($section['acf_fc_layout'])
                    @case('questions')
                        @include('sections.questions', array('section' => $section, 'index' => $loop->index))
                        @break
                    @case('tour')
                        @include('sections.tour', array('section' => $section, 'index' => $loop->index))
                        @break
                    @case('benefits')
                        @include('sections.cards', array('section' => $section, 'with_subtitle' => false, 'type' => 'empty', 'index' => $loop->index))
                        @break
                    @case('map')
                        @include('sections.map', array('section' => $section, 'index' => $loop->index))
                        @break
                    @case('features')
                        @include('sections.cards-icon', array('section' => $section, 'index' => $loop->index))
                        @break
                    @case('about')
                        @include('sections.product-about', array('section' => $section, 'index' => $loop->index))
                        @break
                    @case('video')
                        @include('sections.video', array('section' => $section, 'index' => $loop->index))
                        @break
                    @case('cases')
                        @include('sections.cases', array('section' => $section, 'index' => $loop->index))
                        @break
                    @case('integrations')
                        @include('sections.cards-icon', array('section' => $section, 'index' => $loop->index))
                        @break
                    @case('faq')
                        @include('sections.faqs', array('section' => $section, 'index' => $loop->index, 'is_hidden' => false))
                        @break
                    @case('resources')
                        @include('sections.tabs-resources', array('section' => $section))
                        @break
                    @default
                @endswitch

            @endforeach
    @endif

    @include('sections.demo', array('demo' => $demo))
@endsection
