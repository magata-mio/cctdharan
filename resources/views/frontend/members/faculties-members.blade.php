@extends('frontend.templates.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm table-striped table-bordered" id="datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Designation</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Department</th>
                            <th>PHD</th>
                            <th>Status</th>
                            <th>Photo</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($fmembers as $fmember)
                            <tr>
                                <td>{{ $fmember->id }}</td>
                                <td>{{ $fmember->designation }}</td>
                                <td>{{ $fmember->name }}</td>
                                <td>{{ $fmember->gender }}</td>
                                <td>{{ $fmember->department->name }}</td>
                                <td>{!! $fmember->phd != null ? '<i class="fas fa-check"></i>' : ''  !!}</td>
                                <td>{{ $fmember->status }}</td>
                                <td><img src="{{ asset($fmember->image) }}" alt="" width="64"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $fmembers->render('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection