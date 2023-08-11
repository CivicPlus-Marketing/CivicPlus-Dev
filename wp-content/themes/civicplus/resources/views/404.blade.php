@extends('layouts.app')

@section('content')
  @include('sections.hero', array('hero' => $hero, 'breadcrumbs' => '404', 'video' => false))

  @if($content)
      @foreach($content as $section)
          @switch($section['acf_fc_layout'])
              @case('cards')
                  @include('sections.cards-icon', array('section' => $section, 'index' => $loop->index, 'simple' => true))
                  @break
              @case('resources')
                  @include('sections.tabs-resources', array('section' => $section))
                  @break
              @default
          @endswitch

      @endforeach
  @endif

@endsection
