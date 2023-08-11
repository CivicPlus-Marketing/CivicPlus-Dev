@extends('layouts.app')
@section('content')
    @include('sections.resources-hero', array('section' => $hero))

    @include('sections.archive', array('args' => $args))
@endsection

