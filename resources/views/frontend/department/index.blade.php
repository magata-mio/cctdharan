@extends('frontend.templates.app')

@section('content')
   <div class="container">
       <ul>
           @foreach ($departments as $department)
               <li><a href="/sdepartments/{{ $department->id }}">{{ $department->name }}</a></li>
           @endforeach
       </ul>
   </div>
@endsection