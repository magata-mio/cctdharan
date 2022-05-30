@extends('frontend.templates.app')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Non Teaching Staff List</h1>
                <div class="card">
                    <div class="card-header">
                        <h5>Non Teaching Staff</h5>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>Office/Workplace</th>
                                    <th>Designation</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($staffs as $index => $staff)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $staff->name }}</td>
                                        <td>{{ $staff->gender }}</td>
                                        <td>{{ $staff->Workplace }}</td>
                                        <td>{{ $staff->designation }}</td>
                                        <td>{{ $staff->status }}</td>
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