@extends('frontend.templates.app')

@section('content')
    <div class="container">
        <strong>{{ $notice->subject }}</strong>
        @if ($notice->description)
            <p>
                {{ $notice->description }}
                @endif
            </p>
        </div>
@endsection