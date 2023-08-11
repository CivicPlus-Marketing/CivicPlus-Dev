{{--
  Template Name: Security
--}}
@extends('layouts.app')

@section('content')
    @include('sections.hero', array('hero' => $hero, 'breadcrumbs' => 'about', 'video' => false))

    @if($content)
        @foreach($content as $section)
            @switch($section['acf_fc_layout'])

                @case('image_text')
                    @include('sections.image-text', array('section' => $section, 'with_box' => false))
                    @break
                @case('content')
                    <section id="content-{{  $loop->index }}" class="content-section">
                        <div class="container">
                            {!! $section['content'] !!}
                        </div>
                    </section>
                    @break
                @case('crads')
                    <section id="cards-{{  $loop->index }}" class="cards-section">
                        <div class="container">
                            @if($section['title'])
                                <h2>{!! $section['title'] !!}</h2>
                            @endif

                            @if($section['list'])
                                <div class="list">
                                    @foreach($section['list'] as $card)
                                        <x-card :data="$card" :withLink="true"/>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </section>
                    @break
                @default
            @endswitch

        @endforeach
    @endif

    @include('sections.demo', array('demo' => $demo))

@endsection
