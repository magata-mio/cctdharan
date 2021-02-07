@extends('admin.templates.app')

@section('content')
    <div class="container-fluid pt-4">
        <div class="card">
            <div class="card-header">
                <strong>Online Form</strong>
            </div>
            <div class="card-body">
                <div class="lead mt-4 text-danger">Personal Details</div>
                <div class="py-4 px-4" style="background-color: #f1f1f1">
                    <div class="row">
                        {{-- First Name --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input id="firstName" value="{{ $form->firstName }}" class="form-control" type="text" name="firstName" required>
                            </div>
                        </div>
    
                        {{-- Middle Name --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="middleName">Middle Name</label>
                                <input id="middleName" value="{{ $form->middleName }}" class="form-control" type="text" name="middleName">
                            </div>
                        </div>
    
                        {{-- Last Name --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input id="lastName" value="{{ $form->lastName }}" class="form-control" type="text" name="lastName" required>
                            </div>
                        </div>
                    </div>
    
                    <div class="row mt-4">
                        {{-- Pardesh --}}
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="pradesh">Pardesh</label>
                                <select name="pradesh" class="form-control">
                                    <option value="1" @if($form->pradesh == 1) selected @endif>Pardesh 1</option>
                                    <option value="2" @if($form->pradesh == 2) selected @endif>Pardesh 2</option>
                                    <option value="3" @if($form->pradesh == 3) selected @endif>Pardesh 3</option>
                                    <option value="4" @if($form->pradesh == 4) selected @endif>Pardesh 4</option>
                                    <option value="5" @if($form->pradesh == 5) selected @endif>Pardesh 5</option>
                                    <option value="6" @if($form->pradesh == 6) selected @endif>Pardesh 6</option>
                                    <option value="7" @if($form->pradesh == 7) selected @endif>Pardesh 7</option>
                                </select>
                            </div>
                        </div>
    
                        {{-- Middle Name --}}
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="district">District</label>
                                <input id="district" value="{{ $form->district }}" class="form-control" type="text" name="district" required>
                            </div>
                        </div>
    
                        {{-- Last Name --}}
                        <div class="col-md-2 ">
                            <div class="form-group">
                                <label for="municipality">VDC/Municipality</label>
                                <input id="municipality" value="{{ $form->municipality }}" class="form-control" type="text" name="municipality" required>
                            </div>
                        </div>
    
                        {{-- Ward --}}
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="ward">Ward</label>
                                <input id="ward" value="{{ $form->ward }}" class="form-control" type="text" name="ward" required>
                            </div>
                        </div>
    
                        {{-- Middle Name --}}
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="block">Block No</label>
                                <input id="block" value="{{ $form->block }}" class="form-control" type="text" name="block" required>
                            </div>
                        </div>
    
                        {{-- Last Name --}}
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="tole">Tole</label>
                                <input id="tole" value="{{ $form->tole }}" class="form-control" type="text" name="tole" required>
                            </div>
                        </div>
                    </div>
                </div>
    
    
                <div class="lead mt-4 text-danger">Guardian Details</div>
    
                <div class="px-4 py-4" style="background-color: #f1f1f1">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="guardian">Guardian Name</label>
                                <input id="guardian" value="{{ $form->guardian }}" class="form-control" type="text" name="guardian">
                            </div>
                        </div>
    
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="relation">Relation</label>
                                <input id="relation" value="{{ $form->relation }}" class="form-control" type="text" name="relation">
                            </div>
                        </div>
    
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="occupation">Occupation</label>
                                <input id="occupation" value="{{ $form->occupation }}" class="form-control" type="text" name="occupation">
                            </div>
                        </div>
    
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input id="mobile" value="{{ $form->mobile }}" class="form-control" type="text" name="mobile">
                            </div>
                        </div>
                    </div>
                </div>
    
    
                <div class="px-4 py-4 mt-4" style="background-color: #f1f1f1">
                    {{-- SEE --}}
                    <div class="lead mt-4 text-primary">Examinitation Passed:</div>
                    <p class="fw-bold text-danger">SLC / SEE</p>
    
                    <table class="table table-bordered table-sm table-striped">
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
                                <td><input type="text" name="a" value="{{ $form->a }}" class="form-control" required></td>
                                <td>
                                    <select name="b" class="form-control">
                                        <option value="2070" @if($form->b == '2070') selected @endif>2070</option>
                                        <option value="2071" @if($form->b == '2071') selected @endif>2071</option>
                                        <option value="2072" @if($form->b == '2072') selected @endif>2072</option>
                                        <option value="2073" @if($form->b == '2073') selected @endif>2073</option>
                                        <option value="2074" @if($form->b == '2074') selected @endif>2074</option>
                                        <option value="2075" @if($form->b == '2075') selected @endif>2075</option>
                                        <option value="2076" @if($form->b == '2076') selected @endif>2076</option>
                                        <option value="2077" @if($form->b == '2077') selected @endif>2077</option>
                                        <option value="others" @if($form->b == 'others') selected @endif>Others</option>
                                    </select>
                                </td>
                                <td><input type="text" name="c" value="{{ $form->c }}" class="form-control" required></td>
                                <td>
                                    <input type="text" name="d" id="" required class="form-control" required value="{{ $form->d }}">
                                </td>
                                <td><input type="text" name="e" value="{{ $form->e }}" class="form-control" required></td>
                                <td><input type="text" name="f" value="{{ $form->f }}" class="form-control" required></td>
                                <td><input type="text" name="g" value={{ $form->g }} class="form-control" required></td>
                                <td><input type="text" name="h" value="{{ $form->h }}" class="form-control" required></td>
                            </tr>
                        </tbody>
                    </table>
    
                    {{-- +2 --}}
                    <div class="lead mt-4 text-primary">Examinitation Passed:</div>
                    <p class="fw-bold text-danger">+2 / I.Sc / A Level / Others</p>
    
                    <table class="table table-bordered table-sm table-striped">
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
                                <td><input type="text" value="{{ $form->i }}" name="i" class="form-control" required></td>
                                <td>
                                    <select name="j" class="form-control">
                                        <option value="2070" @if($form->j == '2070') selected @endif >2070</option>
                                        <option value="2071" @if($form->j == '2071') selected @endif>2071</option>
                                        <option value="2072" @if($form->j == '2072') selected @endif>2072</option>
                                        <option value="2073" @if($form->j == '2073') selected @endif>2073</option>
                                        <option value="2074" @if($form->j == '2074') selected @endif>2074</option>
                                        <option value="2075" @if($form->j == '2075') selected @endif>2075</option>
                                        <option value="2076" @if($form->j == '2076') selected @endif>2076</option>
                                        <option value="2077" @if($form->j == '2077') selected @endif>2077</option>
                                        <option value="others" @if($form->j == 'others') selected @endif>Others</option>
                                    </select>
                                </td>
                                <td><input type="text" name="k" value="{{ $form->k }}" class="form-control" required></td>
                                <td>
                                    <input type="text" name="l" id="" required class="form-control" required value="{{ $form->l }}">
                                  
                                </td>
                                <td><input type="text" value="{{ $form->m }}" name="m" class="form-control" required></td>
                                <td><input type="text" name="n" value="{{ $form->n }}" class="form-control" required></td>
                                <td><input type="text" name="o" value="{{ $form->o }}" class="form-control" required></td>
                                <td><input type="text" name="p" value="{{ $form->p }}" class="form-control" required></td>
                            </tr>
                        </tbody>
                    </table>
    
                    {{-- Documents --}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <a href="{{ $form->slcmarksheet }}" target="__blank" class="btn btn-primary">
                                    SLC Marksheet
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="form-group">
                                <a href="{{ $form->slccharacter }}" target="__blank" class="btn btn-primary">
                                    SLC Character
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                        @if ($form->ptranscript)
                        <div class="col-md-3">
                            <div class="form-group">
                                <a href="{{ $form->ptranscript }}" target="__blank" class="btn btn-primary">
                                    +2 Transcript or marksheet
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                        @endif
    
                        @if ($form->pcharacter)
                        <div class="col-md-3">
                            <div class="form-group">
                                <a href="{{ $form->pcharacter }}" target="__blank" class="btn btn-primary">
                                    +2 Character Certificate
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
    
                    <div class="row mt-4">
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <a href="{{ $form->citizenship }}" target="__blank" class="btn btn-primary">
                                    Citizenship
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <a href="{{ $form->ppphoto }}" target="__blank" class="btn btn-primary">
                                    Passport Size Photo
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <a href="{{ $form->bankslip }}" target="__blank" class="btn btn-primary">
                                    Deposit Slip
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
    
                    </div>
    
                </div>
                <form action="{{ route('form.destroy',$form->id) }}" onsubmit="return confirm('Are You Sure You Want To Delete?')" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger mt-4 float-right">
                        <i class="fas fa-trash"></i> Delete Form</button>
                </form>
    
            </div>
        </div>
    </div>

@endsection
