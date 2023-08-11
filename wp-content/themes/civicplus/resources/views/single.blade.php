@extends('layouts.app')

@section('content')
    @include('sections.single-hero')

    <section id="content" class="content-section">
        <div class="container">
            <div class="post-nav">
                <div class="post-nav-box">
                    <ul class="post-navigation js-post-navigation">
                    </ul>
                </div>
            </div>
            <div class="content js-content">
                {!! $content !!}
            </div>
        </div>
    </section>

    <div id="author-detail" class="author-section">
        <div class="container">
            <div class="content">
                <h3>{{ _x('Written by', 'sage') }}</h3>
                <x-author :id="$author_id" :detail="true"/>
            </div>
        </div>
    </div>

    @include('sections.faqs', array('section' => $faqs, 'index' => 0, 'is_hidden' => $faqs['is_it_hidden']))

    <div class="near-post-section">
        <div class="container">
            <div class="content">
                <div class="next-prev-buttons">
                    <div class="previous-button">@php(previous_post_link( '%link',
            '<span><span class="icon-Chevron-left"></span>PREV</span> <p>%title</p>' ))</div>
                    <div class="next-button">@php(next_post_link( '%link',
            '<span>NEXT<span class="icon-Chevron-right"></span></span><p>%title</p>' ))</div>
                </div>
            </div>
        </div>
    </div>

    @include('sections.related', array('section' => $related))

    @include('sections.demo', array('demo' => $demo))
@endsection
