@extends('frontend.templates.app')

@section('content')
    <div class="container py-5">
        <h1 class="display-6 fs-3">Our Faculties Member</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
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
                        @foreach ($fmembers as $index=> $fmember)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ ucfirst($fmember->designation) }}</td>
                                <td>{{ ucfirst($fmember->name) }}</td>
                                <td>{{ ucfirst($fmember->gender) }}</td>
                                <td>{{ $fmember->department->name }}</td>
                                <td>{!! $fmember->phd != null ? '<i class="fas fa-check"></i>' : ''  !!}</td>
                                <td>{{ ucfirst($fmember->status) }}</td>
                                <td><img src="{{ asset($fmember->image) }}" alt="" width="64"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                {{ $fmembers->render('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection