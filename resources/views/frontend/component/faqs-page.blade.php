@extends('frontend.templates.app')

@section('content')
   <div class="container mt-4">
       <h1> {{ $faq->title }} </h1>
       {!! $faq->description !!}
   </div>
@endsection