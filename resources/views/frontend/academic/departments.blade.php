@extends('frontend.templates.app')

@section('content')
   <div class="container mt-4">
       <h1>Our Departments  </h1>
       <ul class="list-unstyled">
           @foreach ($departments as $department)
                <li class="lead text-danger"> <i class="fas fa-check-circle"></i> <a href="/sdepartments/{{ $department->id }}" class="text-primary text-decoration-none"> {{ $department->name }}</a></li>
                <hr>
           @endforeach

       </ul>
   </div>
@endsection