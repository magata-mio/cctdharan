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
                     <th>Name</th>
                      <th>Gender</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $index=>$member)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ ucfirst($member->name) }}</td>
                         <td>{{ ucfirst($member->gender) }}</td>
                        <td>{{ ucfirst($member->designation) }}</td>
                        <td>{{ $member->department->name }}</td>
                        <td>{{ ucfirst($member->status) }}</td>
                        <td><img src="{{ asset($member->image) }}" alt="" width="64"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection