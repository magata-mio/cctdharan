@extends('frontend.templates.app')

@section('content')
   <div class="container mt-4">
       <h1>Our Departments  </h1>
       <ul>
           @foreach ($departments as $department)
               <li><a href="/sdepartments/{{ $department->id }}">{{ $department->name }}</a></li>
           @endforeach
       </ul>
   </div>
@endsection