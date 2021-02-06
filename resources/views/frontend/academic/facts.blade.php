@extends('frontend.templates.app')

@section('content')
   <div class="container mt-4">
       <h1> {{ $fact->title }} </h1>
       {!! $fact->description !!}
   </div>
@endsection