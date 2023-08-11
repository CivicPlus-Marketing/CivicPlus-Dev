{{--
  Template Name: Services Overview
--}}
@extends('layouts.app')

@section('content')
    @include('sections.hero', array('hero' => $hero, 'video' => false))

    <section id="content" class="content-section">
        <div class="container">
            <div class="post-nav">
                <div class="post-nav-box">
                    <ul class="post-navigation js-post-navigation">
                    </ul>
                </div>
            </div>
            <div class="content js-content">
                @foreach($content as $section)
                    @switch($section['acf_fc_layout'])
                        @case('cards')
                            @php($with_feedback = false)
                            <x-content-cards-box :data="$section" :withFeedback="$with_feedback" />
                            @break
                        @case('cards_and_feedback')
                            @php($with_feedback = true)
                            <x-content-cards-box :data="$section" :withFeedback="$with_feedback" />
                            @break
                        @case('cta')
                            <x-cta-box :data="$section" />
                            @break
                        @default
                            @break
                    @endswitch
                @endforeach

            </div>
        </div>
    </section>

    @include('sections.demo', array('demo' => $demo))
@endsection
