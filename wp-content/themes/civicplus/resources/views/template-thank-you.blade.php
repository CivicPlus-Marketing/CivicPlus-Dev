{{--
  Template Name: Thank You
--}}
@extends('layouts.app')

@section('content')
    <section id="hero" class="hero-section" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url({{ $image }})">
        <div class="container">
            <div class="thank-you-box">
                <h1>{!! $title !!}</h1>
                {!! $content !!}
            </div>
        </div>
    </section>
@endsection
