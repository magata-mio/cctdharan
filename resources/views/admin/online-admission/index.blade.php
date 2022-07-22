@extends('admin.templates.app')
@section('content')
    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Online Admission
                    </div>
                    <div class="card-body">
                        <table class="table table-stripe table-responsive" id='datatable'>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student</th>
                                    <th>Mobile</th>
                                    <th>Faculty</th>
                                    <th>Term</th>
                                    <th>Type</th>
                                    <th>PS1</th>
                                    <th>PS2</th>
                                    <th>PS3</th>
                                    <th>Father Name</th>
                                    <th>Contact</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($forms as $index=>$form)
                                    <tr>
                                        <td>{{ ++$index}}</td>
                                        <td>{{ $form->name }}</td>
                                        <td>{{ $form->mobile }}</td>
                                        <td>{{ $form->faculty }}</td>
                                        <td>{{ $form->terms }}</td>
                                        <td>{{ $form->type }}</td>
                                        <td>{{ $form->subject1 }}</td>
                                        <td>{{ $form->subject2 }}</td>
                                        <td>{{ $form->subject3 }}</td>
                                        <td>{{ $form->father }}</td>
                                        <td>{{ $form->fathermobile }}</td>
                                        <td>
                                            <a href="/admission/{{ $form->id }}" class="btn btn-sm btn-primary">View</a>
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