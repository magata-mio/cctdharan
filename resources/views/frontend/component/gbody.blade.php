@extends('frontend.templates.app')

@section('content')
   <div class="container mt-4">
       <h1> {{ $gbody->title }} </h1>
       {!! $gbody->description !!}
   </div>
@endsection