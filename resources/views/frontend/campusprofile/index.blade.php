@extends('frontend.templates.app')
@section('content')
    <div class="container">
        {!! $profile->description !!}
    </div>
@endsection