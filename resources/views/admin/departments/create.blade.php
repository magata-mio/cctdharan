@extends('admin.templates.app')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">
                    Add Department
                </div>
                <div class="card-body">
                    <form action="/departments" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Department Name</label>
                            <input id="name" class="form-control" type="text" name="name" placeholder="Department Name">
                        </div>

                        <div class="form-group">
                            <label for="editor">Description</label>
                            <textarea id="editor" class="form-control" name="editor" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        

                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-secondary">
                    Department List
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($departments as $department)
                                <tr>
                                    <td>{{ $department->id }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>
                                        <a href="/departments/{{ $department->id }}/edit"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection