{{--
  Template Name: Tools Archive
--}}
@extends('layouts.app')

@section('content')
    @include('sections.hero', array('hero' => $hero, 'video' => false))

    @if($content)
        @foreach($content as $section)
            @switch($section['acf_fc_layout'])
                @case('tools')
                    @include('sections.tools', array('section' => $section, 'index' => $loop->index))
                    @break
                @default
            @endswitch
        @endforeach
    @endif

    @include('sections.demo', array('demo' => $demo))
@endsection
