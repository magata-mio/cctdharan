@extends('frontend.templates.app')

@section('content')
    <div class="container mt-5">
        <h1>{{ $department->name }}</h1>
    </div>
    <div class="container">
        {!! $department->description !!}
    </div>

    <div class="container mt-4">
        <div class="lead mb-4">Faculty Members of {{ $department->name }}</div>
        <table class="table table-sm table-bordered table-striped" id="datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Designation</th>
                    <th>Gender</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->designation }}</td>
                        <td>{{ $member->gender }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->department->name }}</td>
                        <td>{{ $member->status }}</td>
                        <td><img src="{{ asset($member->image) }}" alt="" width="64"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection