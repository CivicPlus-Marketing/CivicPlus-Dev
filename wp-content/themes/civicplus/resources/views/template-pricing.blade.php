{{--
  Template Name: Pricing
--}}
@extends('layouts.app')

@section('content')
    <section id="hero" class="hero-section" style="background-image: url({{$image}})">
        <div class="container">
            <div class="left">
                <h1>{!! $title !!}</h1>
                {!! $subtitle !!}
            </div>
            <div class="right">
                @if($form)
                    {!! hubSpotForm($form) !!}
                @endif
            </div>
        </div>
    </section><!-- #pricing -->
@endsection
