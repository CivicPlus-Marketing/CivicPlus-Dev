@extends('layouts.app')

@section('content')
    @include('sections.form-hero', array('webinars' => false))
    @include('sections.about')
@endsection
