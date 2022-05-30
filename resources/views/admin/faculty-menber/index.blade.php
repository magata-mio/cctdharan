@extends('admin.templates.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                
                    <div class="card">
                        <div class="card-header">
                            <a href="/fmembers/create" class="btn btn-primary">Add Faculty Member</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-sm table-striped table-bordered" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Designation</th>
                                        <th>Name</th>
                                        <th>PHD</th>
                                        <th>Department</th>
                                        <th>Profile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fmembers as $index=>$fmember)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $fmember->designation }}</td>
                                            <td>{{ $fmember->name }}</td>
                                            <td>{!!  $fmember->phd != null ? '<i class="fas fa-check"></i>' : ''  !!}</td>
                                            <td>{{ $fmember->department->name }}</td>
                                            <td><img src="{{ asset($fmember->image) }}" alt="" width="64"></td>
                                            <td>
                                                <form action="/fmembers/{{ $fmember->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="/fmembers/{{ $fmember->id }}/edit"><i class="fas fa-edit"></i></a>
                                                    <button type="submit" class="btn btn-sm"><i class="fas fa-trash-alt text-danger"></i></button>
                                                </form>
                                            </td>
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