@extends('frontend.templates.app')

@section('content')
    <div class="container mt-4">
        {!! $about->description !!}
    </div>
@endsection