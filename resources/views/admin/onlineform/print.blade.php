@extends('admin.templates.app')

@section('content')
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            #section-to-print,
            #section-to-print * {
                visibility: visible;
            }

            #section-to-print {
                position: absolute;
                left: 0;
                top: 0;
            }

        }

    </style>
    <div class="container-fluid pt-4" id="section-to-print">
        <div class="card">
            <div class="card-header">
                <strong>Online Form</strong>
            </div>
            <div class="card-body">
                    <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3"></div>
                    <div class="col-3"></div>
                    <div class="col-3">
                        <img src="{{ $form->ppphoto }}" alt="" class="img-thumbnail pt-4">
                    </div>
                </div>
                <h4 class="text-danger">Personal Details</h4>
                <table class="table table-sm">
                    <thead>
                        <th>First Name</th>
                        <th>
                            Middle Name
                        </th>
                        <th> Last Name</th>
                    </thead>
                    <tbody>
                        <td>
                            {{ $form->firstName }}
                        </td>
                        <td>
                            {{ $form->middleName }}
                        </td>
                        <td>
                            {{ $form->lastName }}
                        </td>
                    </tbody>
                </table>
                <table class="table table-sm">
                    <thead>
                        <th>
                            Pardesh
                        </th>
                        <th>
                            District
                        </th>
                        <th>
                            VDC/Municipality
                        </th>
                        <th>
                            Ward
                        </th>
                        <th>
                            Block No.
                        </th>
                        <th>
                            Tole
                        </th>
                        <th>
                            Mobile No.
                        </th>
                        <th>
                            Date Of Birth
                        </th>
                    </thead>
                    <tbody>
                        <td>
                            Pradesh {{ $form->pradesh }}
                        </td>
                        <td>
                            {{ $form->district }}
                        </td>
                        <td>
                            {{ $form->municipality }}
                        </td>
                        <td>
                            {{ $form->ward }}
                        </td>
                        <td>
                            {{ $form->block }}
                        </td>
                        <td>
                            {{ $form->tole }}
                        </td>
                        <td>
                            {{ $form->student_mobile }}
                        </td>
                        <td>
                            {{ $form->dob }}
                        </td>
                    </tbody>
                </table>
                <h4 class="text-danger">
                    Guardian Details
                </h4>
                <table class="table table-sm">
                    <thead>
                        <th>
                            Guardian Name
                        </th>
                        <th>
                            Relation
                        </th>
                        <th>
                            Occupation
                        </th>
                        <th>
                            Mobile
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ $form->guardian }}
                            </td>
                            <td>
                                {{ $form->relation }}
                            </td>
                            <td>
                                {{ $form->occupation }}
                            </td>
                            <td>
                                {{ $form->mobile }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="text-danger">
                    Examinations Passed:
                </h4>
                <h5>
                    SLC / SEE
                </h5>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Board</th>
                            <th>Passed Year</th>
                            <th>Full marks/credit</th>
                            <th>Marks obtain/grade</th>
                            <th>Percentage/GPA</th>
                            <th>Division/GPA</th>
                            <th>Roll No</th>
                            <th>School</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ $form->a }}
                            </td>
                            <td>
                                @switch($form->b)
                                    @case('2070')
                                    2070
                                    @break
                                    @case('2071')
                                    2071
                                    @break
                                    @case('2072')
                                    2072
                                    @break
                                    @case('2073')
                                    2073
                                    @break
                                    @case('2074')
                                    2074
                                    @break
                                    @case('2075')
                                    2075
                                    @break
                                    @case('2076')
                                    2076
                                    @break
                                    @case('2077')
                                    2077
                                    @break
                                    @case('others')
                                    Others
                                    @break
                                    @default
                                    Others
                                @endswitch
                            </td>
                            <td>
                                {{ $form->c }}
                            </td>
                            <td>
                                {{ $form->d }}
                            </td>
                            <td>
                                {{ $form->e }}
                            </td>
                            <td>
                                {{ $form->f }}
                            </td>
                            <td>
                                {{ $form->g }}
                            </td>
                            <td>
                                {{ $form->h }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h5>
                    +2 / I.Sc / A Level / Others
                </h5>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Board</th>
                            <th>Passed Year</th>
                            <th>Full marks/credit</th>
                            <th>Marks obtain/grade</th>
                            <th>Percentage/GPA</th>
                            <th>Division/GPA</th>
                            <th>Roll No</th>
                            <th>College</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ $form->i }}
                            </td>
                            <td>
                                @switch($form->j)
                                    @case('2070')
                                    2070
                                    @break
                                    @case('2071')
                                    2071
                                    @break
                                    @case('2072')
                                    2072
                                    @break
                                    @case('2073')
                                    2073
                                    @break
                                    @case('2074')
                                    2074
                                    @break
                                    @case('2075')
                                    2075
                                    @break
                                    @case('2076')
                                    2076
                                    @break
                                    @case('2077')
                                    2077
                                    @break
                                    @case('others')
                                    Others
                                    @break
                                    @default
                                    Others
                                @endswitch
                            </td>
                            <td>
                                {{ $form->k }}
                            </td>
                            <td>
                                {{ $form->l }}
                            </td>
                            <td>
                                {{ $form->m }}
                            </td>
                            <td>
                                {{ $form->n }}
                            </td>
                            <td>
                                {{ $form->o }}
                            </td>
                            <td>
                                {{ $form->p }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <table class="table table-sm">
                <thead>
                    <th>
                        Marks
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{$form->marks}}
                        </td>
                    </tr>
                </tbody>
            </table>
            <img src="{{ $form->slcmarksheet }}" alt="" class="img-fluid pt-4">
            <img src="{{ $form->slccharacter }}" alt="" class="img-fluid pt-4">
            <img src="{{ $form->ptranscript }}" alt="" class="img-fluid pt-4">
            <img src="{{ $form->pcharacter }}" alt="" class="img-fluid pt-4">
            @if ($form->citizenship)
            <img src="{{ $form->citizenship }}" alt="" class="img-fluid pt-4">    
            @endif   
            <img src="{{ $form->bankslip }}" alt="" class="img-fluid pt-4">    
        </div>
    </div>

@endsection
