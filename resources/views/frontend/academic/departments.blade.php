@extends('frontend.templates.app')

@section('content')
   <div class="container my-4">
       <h1>Our Departments  </h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>DEPARTMENTS</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped">
                            @foreach ($departments as $department)
                                <tr>
                                    <td>{{ $department->id }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td><a href="/sdepartments/{{ $department->id }}" class="btn btn-sm text-white" style="background-color: #0077B6;">View</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
         
   </div>
@endsection