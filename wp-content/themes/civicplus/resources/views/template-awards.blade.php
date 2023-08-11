{{--
  Template Name: Awards
--}}
@extends('layouts.app')

@section('content')
    @include('sections.hero', array('hero' => $hero, 'breadcrumbs' => 'about', 'video' => false))

    @if($content)
        <div id="content-box" class="content-box js-content-box">
            @foreach($content as $section)
                @switch($section['acf_fc_layout'])
                    @case('awards')
                        @include('sections.awards', array('section' => $section))
                        @break
                    @case('content')
                        <section id="content" class="content-section">
                            <div class="container">
                                {!! $section['content'] !!}
                            </div>
                        </section>
                        @break
                    @case('tour')
                        @include('sections.tour', array('section' => $section))
                        @break
                    @default
                @endswitch
            @endforeach
        </div>
    @endif

        @include('sections.demo-form', array('demo' => $demo))

@endsection
