@extends('layouts.app')

@php($loop = new WP_Query($args))

@section('content')

    <section id="hero" class="hero-section">
        <div class="container">
            <x-breadcrumbs type="author"/>
        </div>
    </section><!-- #hero -->

    <section id="archive" class="archive-section">
        <div class="container">
            <div class="author-box">
                {!! $image !!}

                <div class="info">
                    <h1>{!! $name !!}</h1>
                    {!! $description !!}
                </div>
            </div>

            <div class="list-header">
                <h2>{{ _x('More from ', 'sage') }} {!! $name !!} </h2>
            </div>

            @include('partials.archive-loop', array('args' => $args, 'post_type' => array('name' => 'post')))

            <x-pagination :type="$post_type" :perPage="10" :loop="$loop" />
        </div>
    </section>

@endsection
