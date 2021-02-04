@extends('frontend.templates.app')

@section('content')
    <div class="container">
        {!! $department->description !!}
    </div>
@endsection