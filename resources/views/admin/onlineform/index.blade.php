@extends('admin.templates.app')

@section('content')
    <div class="row pt-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>
                        Online Forms
                    </strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm tabe-bordered table-striped" id='datatable'>
                        <thead>
                            <th>
                                #
                            </th>
                            <th>
                                Symbol no.
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Pradesh
                            </th>
                            <th>
                                District
                            </th>
                            <th>
                                VDC/Municipality
                            </th>
                            <th>
                                +2 Grade
                            </th>
                            <th>
                                Action
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($forms as $index=>$form)
                                <tr>
                                    <td>
                                        {{ ++$index }}
                                    </td>
                                    <td>
                                        {{ $form->id+8000 }}
                                    </td>
                                    <td>
                                        {{ $form->firstName }} {{ $form->middleName }} {{ $form->lastName }}
                                    </td>
                                    <td>
                                        {{ $form->pradesh }}
                                    </td>
                                    <td>
                                        {{ $form->district }}
                                    </td>
                                    <td>
                                        {{ $form->municipality }}
                                    </td>
                                    <td>
                                        {{ $form->l }}
                                    </td>
                                    <td>
                                        <a href="{{ route('form.show',$form->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-eye"></i> View
                                        </a>
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