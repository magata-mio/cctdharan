@extends('frontend.templates.app')

@section('content')
   <div class="container mt-4">
       <h1> {{ $research->title }} </h1>
       {!! $research->description !!}
       
   </div>
@endsection