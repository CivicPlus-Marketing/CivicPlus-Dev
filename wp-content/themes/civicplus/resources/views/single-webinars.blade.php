@extends('layouts.app')

@section('content')
    @include('sections.form-hero', array('webinars' => true))

    <section id="about" class="about-section">
        <div class="container">
            <div class="content-box">
                {!! $content !!}
            </div>

            <div class="people-box">
                <h2>{!! $panelists_title !!}</h2>

                <div class="list columns-{!! count($panelists) !!}">
                    @foreach($panelists as $item)
                        <x-speaker-card :id="$item" :detail="true"/>
                    @endforeach
                </div>
            </div>

            <div class="people-box">
                <h2>{!! $host_title !!}</h2>

                <div class="list columns-{!! count($host) !!}">
                    @foreach($host as $item)
                        <x-speaker-card :id="$item" :detail="true"/>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
