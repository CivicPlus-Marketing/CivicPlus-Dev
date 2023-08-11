{{--
  Template Name: Home
--}}
@extends('layouts.app')

@section('content')
    @if($hero['title'])
        <section id="hero" class="hero-section">
            <div class="container">
                <div class="left">
                    <span class="tag">{!! $hero['tag'] !!}</span>
                    <h1>{!! $hero['title'] !!}</h1>
                    {!! $hero['subtitle'] !!}

                    {!! cps_button($hero['link']) !!}

                    @if($hero['achievements'])
                        <div class="achievements">
                            @foreach($hero['achievements'] as $item)
                                <div class="col">
                                    <p>{!! $item['title'] !!}</p>
                                    <p>{!! $item['description'] !!}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="right">
                    {!! wp_get_attachment_image( $hero['image'], 'full' ) !!}
                </div>
            </div>
        </section><!-- #hero -->
    @endif

    @if($content)
        <div id="content-box" class="content-box js-content-box">
            @if($announcement['title'])
                <div class="announcement-bar">
                    <div class="container">
                        <div class="content">
                            <span class="tag">{!! $announcement['tag'] !!}</span>
                            <p class="title">{!! $announcement['title'] !!}</p>
                            {!! cps_button($announcement['link'], 'learn-more') !!}
                        </div>
                    </div>
                </div>
            @endif

            <div class="post-nav">
                <div class="post-nav-box">
                    <ul class="post-navigation js-post-navigation">
                    </ul>
                </div>
            </div>

            @foreach($content as $section)
                @switch($section['acf_fc_layout'])
                    @case('cards')
                        @include('sections.cards', array('section' => $section, 'with_subtitle' => true, 'type' => 'detail'))
                        @break
                    @case('products')
                        @include('sections.tabs-products', array('section' => $section, 'type' => 'home'))
                        @break
                    @case('tools')
                        @include('sections.tabs-tools', array('section' => $section))
                        @break
                    @case('cases')
                        @include('sections.cases', array('section' => $section))
                        @break
                    @case('resources')
                        @include('sections.tabs-resources', array('section' => $section))
                        @break
                    @default
                        @break
                @endswitch
            @endforeach
        </div>
    @endif

    @include('sections.demo', array('demo' => $demo))
@endsection
