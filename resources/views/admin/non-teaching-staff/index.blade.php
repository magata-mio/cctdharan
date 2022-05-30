@extends('admin.templates.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/nonteachingstaffs/create" class="btn btn-primary">Add Non Teaching Staff</a>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Office/Workplace</th>
                                    <th>Designation</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($staffs as $index => $staff)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $staff->name }}</td>
                                        <td>{{ $staff->gender }}</td>
                                        <td>{{ $staff->workplace }}</td>
                                        <td>{{ $staff->designation }}</td>
                                        <td>{{ $staff->status }}</td>
                                        <th>
                                            <a href="/nonteachingstaffs/{{ $staff->id }}/edit" class="badge bg-primary">Edit</a>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection