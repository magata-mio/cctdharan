@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1 class="fs-4">Online Form</h1>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="lead mt-4 text-danger">Personal Details</div>
            <div class="py-4 px-4" style="background-color: #f1f1f1">
                <div class="row">
                    {{-- First Name --}}
                   <div class="col-md-4">
                       <div class="form-group">
                           <label for="firstName">First Name</label>
                           <input id="firstName" class="form-control" type="text" name="firstName" required>
                       </div>
                   </div>
   
                   {{-- Middle Name --}}
                   <div class="col-md-4">
                       <div class="form-group">
                           <label for="middleName">Middle Name</label>
                           <input id="middleName" class="form-control" type="text" name="middleName">
                       </div>
                   </div>
   
                   {{-- Last Name --}}
                   <div class="col-md-4">
                       <div class="form-group">
                           <label for="lastName">Last Name</label>
                           <input id="lastName" class="form-control" type="text" name="lastName" required>
                       </div>
                   </div>
               </div>
   
               <div class="row mt-4">
                   {{-- Pardesh --}}
                  <div class="col-md-2">
                      <div class="form-group">
                          <label for="pardesh">Pardesh</label>
                          <select name="pardesh" class="form-control">
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
                          <label for="district">District</label>
                          <input id="district" class="form-control" type="text" name="district" required>
                      </div>
                  </div>
   
                  {{-- Last Name --}}
                  <div class="col-md-2 ">
                      <div class="form-group">
                          <label for="municipality">VDC/Municipality</label>
                          <input id="municipality" class="form-control" type="text" name="municipality" required>
                      </div>
                  </div>
   
                   {{-- Ward --}}
               <div class="col-md-2">
                   <div class="form-group">
                       <label for="ward">Ward</label>
                       <input id="ward" class="form-control" type="text" name="ward" required>
                   </div>
               </div>
   
              {{-- Middle Name --}}
              <div class="col-md-2">
                  <div class="form-group">
                      <label for="block">Block No</label>
                      <input id="block" class="form-control" type="text" name="block" required>
                  </div>
              </div>
   
              {{-- Last Name --}}
              <div class="col-md-2">
                  <div class="form-group">
                      <label for="tole">Tole</label>
                      <input id="tole" class="form-control" type="text" name="tole" required>
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
                        <input id="guardian" class="form-control" type="text" name="guardian">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="relation">Relation</label>
                        <input id="relation" class="form-control" type="text" name="relation">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="occupation">Occupation</label>
                        <input id="occupation" class="form-control" type="text" name="occupation">
                    </div>
                </div>  

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input id="mobile" class="form-control" type="text" name="mobile">
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
                        <td><input type="text" name="a" class="form-control" required></td>
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
                        <td><input type="text" name="c" class="form-control" required></td>
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
                        <td><input type="text" name="e" class="form-control" required></td>
                        <td><input type="text" name="f" class="form-control" required></td>
                        <td><input type="text" name="g" class="form-control" required></td>
                        <td><input type="text" name="h" class="form-control" required></td>
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
                        <td><input type="text" name="i" class="form-control" required></td>
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
                        <td><input type="text" name="k" class="form-control" required></td>
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
                        <td><input type="text" name="m" class="form-control" required></td>
                        <td><input type="text" name="n" class="form-control" required></td>
                        <td><input type="text" name="o" class="form-control" required></td>
                        <td><input type="text" name="p" class="form-control" required></td>
                    </tr>
                </tbody>
            </table>

            {{-- Documents --}}
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="slcmarksheet">SLC Marksheet</label>
                        <input id="slcmarksheet" class="form-control-file" type="file" name="slcmarksheet">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="slccharacter">SLC Character Certificate</label>
                        <input id="slccharacter" class="form-control-file" type="file" name="slccharacter">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="ptranscript">+2 Transcript or marksheet</label>
                        <input id="ptranscript" class="form-control-file" type="file" name="ptranscript">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="pcharacter">+2 Character Certificate</label>
                        <input id="pcharacter" class="form-control-file" type="file" name="pcharacter">
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="citizenship">Citizenship</label>
                        <input id="citizenship" class="form-control-file" type="file" name="citizenship">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="ppphoto">Passport Size Photo</label>
                        <input id="ppphoto" class="form-control-file" type="file" name="ppphoto">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="bankslip">Deposit Slip of Nepal Bank Limited Dharan</label>
                        <input id="bankslip" class="form-control-file" type="file" name="bankslip">
                    </div>
                </div>

                
            </div>

            </div>
            <button type="submit" class="btn btn-danger mt-4">Apply Now</button>
        </form>
    </div>
@endsection