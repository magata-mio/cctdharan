@extends('frontend.templates.app')

@section('content')
    <div class="container">
        <strong>{{ $notice->subject }}</strong>
        @if ($notice->description)
            <p>
                {!! $notice->description !!}
                @endif
            </p>
            @if($notice->file)
            <a href="{{ $notice->file }}" class="btn btn-primary float-right" target="__blank">
                <i class="fas fa-download"></i> Download File
            </a>
            @endif
    </div>
@endsection