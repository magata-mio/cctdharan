@extends('frontend.templates.app')

@section('content')

    <div class="container py-5">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <h4>Online Admission Form</h4>
        <form action="/online-admission" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="faculty">Select Faculty <span class="text-danger">*</span></label>
                        <select id="faculty" class="form-control" name="faculty">
                            <option value="BSc Biological">BSc.Biological</option>
                            <option value="BSc Physics">BSc Physics</option>
                            <option value="BTech Food">BTech Food</option>
                            <option value="Bsc Nutrition & Dietetics">Bsc Nutrition & Dietetics</option>
                            <option value="MSc Microbiology">MSc Microbiology</option>
                            <option value="Bachelor in Information Technology">Bachelor in Information Technology</option>
                        </select>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="terms">Select Terms <span class="text-danger">*</span></label>
                        <select id="terms" class="form-control" name="terms">
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                            <option value="1st Semester">1st Semester</option>
                            <option value="2nd Semester">2nd Semester</option>
                            <option value="3rd Semester">3rd Semester</option>
                            <option value="4th Semester">4th Semester</option>
                            <option value="5th Semester">5th Semester</option>
                            <option value="6th Semester">6th Semester</option>
                            <option value="7th Semester">7th Semester</option>
                            <option value="8th Semester">8th Semester</option>
                        </select>
                    </div>
                </div>
            </div>

           <div class="row mt-2">
            <label for="">Admission Type</label>
            <div class="col-md-8">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-light">
                        <input type="radio" name="type" value="Scholarship" checked> Scholarship
                    </label>

                    <label class="btn btn-light">
                        <input type="radio" name="type" value="Donation"> Donation
                    </label>
                </div>
            </div>
           </div>

            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="subject1">Priority Subject 1 <span class="text-danger">*</span></label>
                        <input id="subject1" class="form-control" type="text" name="subject1" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="subject2">Priority Subject 2 </label>
                        <input id="subject2" class="form-control" type="text" name="subject2">
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="subject3">Priority Subject 3 </label>
                        <input id="subject3" class="form-control" type="text" name="subject3" >
                    </div>
                </div>

                {{-- <div class="col-md-4">
                    <div class="form-group">
                        <label for="subject4">Priority Subject 4 </label>
                        <input id="subject4" class="form-control" type="text" name="subject4">
                    </div>
                </div> --}}
            </div>
    
            <label for="personal" class="my-4"><strong>Personal Details</strong></label>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="fullname">Full Name <span class="text-danger">*</span></label>
                        <input id="fullname" class="form-control" type="text" name="name" required value="{{ old('name') }}">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="parmanent">Parmanent Address <span class="text-danger">*</span></label>
                        <input id="parmanent" class="form-control" type="text" name="parmanent" required value="{{ old('parmanent') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="temporary">Temporary Address <span class="text-danger">*</span></label>
                        <input id="temporary" class="form-control" type="text" name="temporary" value="{{ old('temporary') }}" required>
                    </div>
                </div>
            </div>
    
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="mobile">Mobile No <span class="text-danger">*</span></label>
                        <input id="mobile" class="form-control" type="tel" name="mobile" required value="{{ old('mobile') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}">
                    </div>
                </div>
            </div>
    
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input id="dob" class="form-control" type="date" name="dob" value="{{ old('dob') }}">
                    </div>
                </div>
                
            </div>
    
            <label for="guardian" class="my-4"><strong>Guardian Details</strong></label>
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="father">Father/Mother Name <span class="text-danger">*</span></label>
                        <input id="father" class="form-control" type="text" name="father" required value="{{ old('father') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="mobile">Mobile <span class="text-danger">*</span></label>
                        <input id="mobile" class="form-control" type="tel" name="fathermobile" required value="{{ old('fathermobile') }}">
                    </div>
                </div>
            </div>
    
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="localguardian">Local Guardian <span class="text-danger">*</span></label>
                        <input id="localguardian" class="form-control" type="text" name="guardian" required value="{{ old('guardian') }}"> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="contact">Contact No <span class="text-danger">*</span></label>
                        <input id="contact" class="form-control" type="tel" name="contact" required value="{{ old('contact') }}">
                    </div>
                </div>
            </div>
    
            <div class="row mt-2">
                <div class="col-md-12">
                    <p><span class="fw-bold">Note:</span> File size must be maximum 512 KB</p>
                    <p>Reduce your file size from this link: <a href="https://tinypng.com/" target="_blank">Reduce File Size</a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                   <div class="form-group">
                       <label for="photo">Passport Size Photo <span class="text-danger">*</span></label>
                       <input id="photo" class="form-control-file" type="file" name="photo" required value="{{ old('photo') }}">
                   </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="slip">Bank Deposit Slip <span class="text-danger">*</span></label>
                        <input id="slip" class="form-control-file" type="file" name="slip" required value="{{ old('slip') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <h5>Bank Details </h5>
                    <address>
                        <strong>Account Name: </strong> Bigyan Adhyan Sasthan <br>
                        <strong>Account No. : </strong> 01601000211364000002 <br>
                        <strong>Branch: </strong> Nepal Bank Limited, City Office Dharan
                        
                    </address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="documents">Academic Documents (PDF Format) <span class="text-danger">*</span></label>
                    <input id="documents" class="form-control-file" type="file" name="documents" required value="{{ old('documents') }}" accept="application/pdf">
                </div>
             </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection