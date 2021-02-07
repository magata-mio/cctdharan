@extends('frontend.templates.app')

@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif
@section('content')
    <div class="container my-5">
        <h1 class="fs-4">Online Form</h1>
        <p>Admission open for Bachlore Degree in Nutrition and Dietetics</p>
        <form action="{{ route('form') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="lead mt-4 text-danger">Personal Details</div>
            <div class="py-4 px-4" style="background-color: #f1f1f1">
                <div class="row">
                    {{-- First Name --}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="firstName">First Name <span class="text-danger">*</span></label>
                            <input id="firstName" class="form-control" type="text" name="firstName" required
                                value="{{ old('firstName') }}">
                        </div>
                        @error('firstName')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Middle Name --}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="middleName">Middle Name</label>
                            <input id="middleName" class="form-control" type="text" name="middleName"
                                value="{{ old('middleName') }}">
                        </div>
                    </div>

                    {{-- Last Name --}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastName">Last Name <span class="text-danger">*</span></label>
                            <input id="lastName" class="form-control" type="text" name="lastName" required
                                value="{{ old('lastName') }}">
                        </div>
                        @error('lastName')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mt-4">
                    {{-- Pardesh --}}
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="pradesh">Pardesh <span class="text-danger">*</span></label>
                            <select name="pradesh" class="form-control">
                                <option value="1">Pardesh 1</option>
                                <option value="2">Pardesh 2</option>
                                <option value="3">Pardesh 3</option>
                                <option value="4">Pardesh 4</option>
                                <option value="5">Pardesh 5</option>
                                <option value="6">Pardesh 6</option>
                                <option value="7">Pardesh 7</option>
                            </select>
                        </div>
                    </div>

                    {{-- Middle Name --}}
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="district">District <span class="text-danger">*</span></label>
                            <input id="district" class="form-control" type="text" name="district" required
                                value="{{ old('district') }}">
                        </div>
                        @error('district')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Last Name --}}
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <label for="municipality">VDC/Municipality <span class="text-danger">*</span></label>
                            <input id="municipality" class="form-control" type="text" name="municipality" required
                                value="{{ old('municipality') }}">
                        </div>
                        @error('municipality')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Ward --}}
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="ward">Ward <span class="text-danger">*</span></label>
                            <input id="ward" class="form-control" type="text" name="ward" required
                                value="{{ old('ward') }}">
                        </div>
                        @error('ward')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Middle Name --}}
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="block">Block No </label>
                            <input id="block" class="form-control" type="text" name="block" 
                                value="{{ old('block') }}">
                        </div>
                        @error('block')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Last Name --}}
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="tole">Tole <span class="text-danger">*</span></label>
                            <input id="tole" class="form-control" type="text" name="tole" required
                                value="{{ old('tole') }}">
                        </div>
                        @error('tole')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    {{-- Date Of Birth --}}
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="student_mobile">Mobile No. <span class="text-danger">*</span></label>
                            <input id="student_mobile" class="form-control" type="tel" name="student_mobile" required
                                value="{{ old('student_mobile') }}">
                        </div>
                        @error('student_mobile')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Mobile No --}}
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="dob">Date OF Birth <span class="text-danger">*</span></label>
                            <input id="dob" class="form-control" type="date" name="dob" required
                                value="{{ old('dob') }}">
                        </div>
                        @error('dob')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>




            <div class="lead mt-4 text-danger">Guardian Details</div>

            <div class="px-4 py-4" style="background-color: #f1f1f1">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="guardian">Guardian Name</label>
                            <input id="guardian" class="form-control" type="text" name="guardian"
                                value="{{ old('guardian') }}">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="relation">Relation</label>
                            <input id="relation" class="form-control" type="text" name="relation"
                                value="{{ old('relation') }}">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="occupation">Occupation</label>
                            <input id="occupation" class="form-control" type="text" name="occupation"
                                value="{{ old('occupation') }}">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input id="mobile" class="form-control" type="text" name="mobile"
                                value="{{ old('mobile') }}">
                        </div>
                    </div>
                </div>
            </div>


            <div class="px-4 py-4 mt-4" style="background-color: #f1f1f1">
                {{-- SEE --}}
                <div class="lead mt-4 text-primary">Examinitation Passed:</div>
                <p class="fw-bold text-danger">SLC / SEE </p>

                <div class="table-responsive">


                    <table class="table table-bordered table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Board <span class="text-danger">*</span></th>
                                <th>Passed Year <span class="text-danger">*</span></th>
                                <th>Full marks/credit <span class="text-danger">*</span></th>
                                <th>Marks obtain/grade <span class="text-danger">*</span></th>
                                <th>Percentage/GPA <span class="text-danger">*</span></th>
                                <th>Division/GPA <span class="text-danger">*</span></th>
                                <th>Symbol No <span class="text-danger">*</span></th>
                                <th>School Name <span class="text-danger">*</span></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="text" name="a" class="form-control" required value="{{ old('a') }}">
                                </td>
                                <td>
                                    <select name="b" class="form-control">
                                        <option value="2070">2070</option>
                                        <option value="2071">2071</option>
                                        <option value="2072">2072</option>
                                        <option value="2073">2073</option>
                                        <option value="2074">2074</option>
                                        <option value="2075">2075</option>
                                        <option value="2076">2076</option>
                                        <option value="2077">2077</option>
                                        <option value="others">Others</option>
                                    </select>
                                </td>
                                <td><input type="text" name="c" class="form-control" required value="{{ old('c') }}">
                                </td>
                                <td>
                                    <select name="d" class="form-control">
                                        <option value="A+">A+</option>
                                        <option value="A">A</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="C+">C+</option>
                                        <option value="C">C</option>

                                    </select>
                                </td>
                                <td><input type="text" name="e" class="form-control" required value="{{ old('e') }}">
                                </td>
                                <td><input type="text" name="f" class="form-control" required value="{{ old('f') }}">
                                </td>
                                <td><input type="text" name="g" class="form-control" required value="{{ old('g') }}">
                                </td>
                                <td><input type="text" name="h" class="form-control" required value="{{ old('h') }}">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    {{-- +2 --}}
                    <div class="lead mt-4 text-primary">Examinitation Passed:</div>
                    <p class="fw-bold text-danger">+2 / I.Sc / A Level / Others</p>

                    <table class="table table-bordered table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Board <span class="text-danger">*</span></th>
                                <th>Passed Year <span class="text-danger">*</span></th>
                                <th>Full marks/credit <span class="text-danger">*</span></th>
                                <th>Marks obtain/grade <span class="text-danger">*</span></th>
                                <th>Percentage/GPA <span class="text-danger">*</span></th>
                                <th>Division/GPA <span class="text-danger">*</span></th>
                                <th>Symbol No <span class="text-danger">*</span></th>
                                <th>College Name <span class="text-danger">*</span></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="text" name="i" class="form-control" required value="{{ old('i') }}">
                                </td>
                                <td>
                                    <select name="j" class="form-control">
                                        <option value="2070">2070</option>
                                        <option value="2071">2071</option>
                                        <option value="2072">2072</option>
                                        <option value="2073">2073</option>
                                        <option value="2074">2074</option>
                                        <option value="2075">2075</option>
                                        <option value="2076">2076</option>
                                        <option value="2077">2077</option>
                                        <option value="others">Others</option>
                                    </select>
                                </td>
                                <td><input type="text" name="k" class="form-control" required value="{{ old('k') }}">
                                </td>
                                <td>
                                    <select name="l" class="form-control">
                                        <option value="A+">A+</option>
                                        <option value="A">A</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="C+">C+</option>
                                        <option value="C">C</option>

                                    </select>
                                </td>
                                <td><input type="text" name="m" class="form-control" required value="{{ old('m') }}">
                                </td>
                                <td><input type="text" name="n" class="form-control" required value="{{ old('n') }}">
                                </td>
                                <td><input type="text" name="o" class="form-control" required value="{{ old('o') }}">
                                </td>
                                <td><input type="text" name="p" class="form-control" required value="{{ old('p') }}">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- Documents --}}
                <p><span class="fw-bold">Note:</span> File size must be maximum 512 KB</p>
                <p>Reduce your file size from this link: <a href="https://tinypng.com/" target="_blank">Reduce File Size</a>
                </p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="slcmarksheet">SLC Marksheet <span class="text-danger">*</span></label>
                            <input id="slcmarksheet" class="form-control-file" type="file" name="slcmarksheet" required
                                value="{{ old('slcmarksheet') }}">
                        </div>
                        @error('slcmarksheet')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="slccharacter">SLC Character Certificate <span class="text-danger">*</span></label>
                            <input id="slccharacter" class="form-control-file" type="file" name="slccharacter" required
                                value="{{ old('slccharacter') }}">
                        </div>
                        @error('slccharacter')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ptranscript">+2 Transcript or marksheet <span class="text-danger">*</span></label>
                            <input id="ptranscript" class="form-control-file" type="file" name="ptranscript" required
                                value="{{ old('ptranscript') }}">
                        </div>
                        @error('pranscript')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="pcharacter">+2 Character Certificate </label>
                            <input id="pcharacter" class="form-control-file" type="file" name="pcharacter"
                                value="{{ old('pcharacter') }}">
                        </div>
                        @error('pcharacter')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="citizenship">Citizenship</label>
                            <input id="citizenship" class="form-control-file" type="file" name="citizenship"
                                value="{{ old('citizenshop') }}">
                        </div>
                        @error('citizenship')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ppphoto">Passport Size Photo <span class="text-danger">*</span></label>
                            <input id="ppphoto" class="form-control-file" type="file" name="ppphoto" required
                                value="{{ old('ppphoto') }}">
                        </div>
                        @error('ppphoto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="bankslip">Deposit Slip of Nepal Bank Limited Dharan <span
                                    class="text-danger">*</span></label>
                            <input id="bankslip" class="form-control-file" type="file" name="bankslip" required
                                value="{{ old('bankslip') }}">
                            @error('bankslip')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                </div>

            </div>
            <div class="text-danger">If You Have Any Problem Please Contact <a href="tel:+977986216429" class="text-decoration-none text-danger">986216429</a>/ <a href="tel:+9779852051545" class="text-decoration-none text-danger">9852051545</a> </div>
            <button type="submit" class="btn btn-danger mt-4">Apply Now</button>
        </form>
    </div>
@endsection
