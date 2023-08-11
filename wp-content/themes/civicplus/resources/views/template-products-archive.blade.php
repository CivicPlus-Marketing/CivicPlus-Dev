{{--
  Template Name: Products Archive
--}}
@extends('layouts.app')

@section('content')
    @include('sections.hero', array('hero' => $hero, 'video' => false))

    @if($content)
            @foreach($content as $section)
                @switch($section['acf_fc_layout'])
                    @case('products')
                        @include('sections.tabs-products', array('section' => $section, 'type' => 'archive', 'index' => $loop->index))
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
