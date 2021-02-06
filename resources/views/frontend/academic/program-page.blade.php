@extends('frontend.templates.app')

@section('content')
   <div class="container mt-4">
       <h1> {{ $program->title }} </h1>
       {!! $program->description !!}
   </div>
@endsection