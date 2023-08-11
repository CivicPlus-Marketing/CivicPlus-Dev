{{--
  Template Name: Use Case
--}}
@extends('layouts.app')

@section('content')
    @include('sections.hero', array('hero' => $hero, 'breadcrumbs' => 'use-case', 'video' => false))

    @if($content)
        <div id="content-box" class="content-box js-content-box">
            <div class="post-nav">
                <div class="post-nav-box">
                    <ul class="post-navigation js-post-navigation">
                    </ul>
                </div>
            </div>

            @foreach($content as $section)
                @switch($section['acf_fc_layout'])
                    @case('challenge')
                        @include('sections.challenge', array('section' => $section))
                        @break
                    @case('resources')
                        @include('sections.tabs-resources', array('section' => $section))
                        @break
                    @default
                @endswitch
            @endforeach
        </div>
    @endif

    @include('sections.demo', array('demo' => $demo))

@endsection
