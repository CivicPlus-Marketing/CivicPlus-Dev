{{--
  Template Name: Contact Us
--}}
@extends('layouts.app')

@section('content')
    <section id="hero" class="hero-section contact-us-js" style="background-image: url({{$image}})">
        <div class="container">
            <x-breadcrumbs type="about" />
            <div class="left">
                <h1>{!! $title !!}</h1>
                {!! $subtitle !!}
            </div>
            <div class="right">
                <div class="tabs-box js-tabs">
                    <div class="tabs-nav">
                        @foreach($tabs as $item)
                            <button class="tab-nav-item js-tabs-nav" title="{!! $item['title'] !!}"
                                    data-product="tab-{{ $loop->index }}">{!! $item['title'] !!}</button>
                        @endforeach
                    </div>

                    <div class="tabs-content">
                        @foreach($tabs as $item)
                            @switch($item['acf_fc_layout'])
                                @case('form')
                                    <div class="tabs-body js-tabs-body">
                                        {!! hbsptForms($item['form']) !!}
                                    </div>
                                    @break
                                @case('buttons')
                                    <div class="tabs-body js-tabs-body">
                                        @foreach($item['list'] as $s_item)
                                            <div class="box">
                                                {!! $s_item['text'] !!}
                                                {!! cps_button($s_item['link'], 'btn-red') !!}
                                            </div>
                                        @endforeach
                                    </div>
                                    @break
                                @case('copy')
                                    <div class="tabs-body js-tabs-body">
                                        <div class="box">
                                            {!! $item['text'] !!}
                                        </div>
                                    </div>
                                    @break
                                @default
                                    @break
                            @endswitch
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #pricing -->
@endsection
