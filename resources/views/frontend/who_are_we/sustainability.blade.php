@extends('frontend.templates.app')

@section('content')
    <div class="container mt-5">
        {!! $sustainability->description !!}
    </div>
@endsection