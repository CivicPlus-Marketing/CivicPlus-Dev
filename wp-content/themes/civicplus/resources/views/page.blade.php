@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <section id="content" class="content-section">
        <div class="container">
            <div class="content">
                <h1>{!! get_the_title() !!}</h1>
                {!! the_content() !!}
            </div>
        </div>
    </section>
  @endwhile
@endsection
