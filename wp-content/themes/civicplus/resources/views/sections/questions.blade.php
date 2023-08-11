@php($id = 'questions')
@if($index > 0)
    @php($id = 'questions-' . $index )
@endif

<section id="{{ $id }}" class="questions-section">
    <div class="container">
        <span class="tag">{!! $section['tag'] !!}</span>
        <h2>{!! $section['title'] !!}</h2>

        <div class="content">
            <div class="left">
                @if($section['list'])
                    @foreach($section['list'] as $item)
                        @if($loop->index % 2 == 0)
                            <div class="question-box">
                                <p>{!! $item['question'] !!}</p>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
            <div class="center">
                {!! wp_get_attachment_image( $section['image'], 'full' ) !!}
            </div>
            <div class="right">
                @if($section['list'])
                    @foreach($section['list'] as $item)
                        @if($loop->index % 2 !== 0)
                            <div class="question-box">
                                <p>{!! $item['question'] !!}</p>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section><!-- {{ $id }} -->