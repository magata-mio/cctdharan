@extends('admin.templates.app')
@section('content')
<div class="container py-5">
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <h4>Online Admission Form</h4>
    <form action="/admission/{{ $form->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="faculty">Select Faculty <span class="text-danger">*</span></label>
                    <select id="faculty" class="form-control" name="faculty">
                        <option value="BSc Biological" {{ $form->faculty == 'BSc Biological' ? 'selected' : '' }}>BSc.Biological</option>
                        <option value="BSc Physics" {{ $form->faculty == 'BSc Physics' ? 'selected' : '' }}>BSc Physics</option>
                        <option value="BTech Food" {{ $form->faculty == 'BTech Food' ? 'selected' : '' }}>BTech Food</option>
                        <option value="Bsc Nutrition & Dietetics" {{ $form->faculty == 'Bsc Nutrition & Dietetics' ? 'selected' : '' }}>sc Nutrition & Dietetics</option>
                        <option value="MSc Microbiology" {{ $form->faculty == 'MSc Microbiology' ? 'selected' : '' }}>MSc Microbiology</option>
                        <option value="Bachelor in Information Technology" {{ $form->faculty == 'Bachelor in Information Technology' ? 'selected' : '' }}>Bachelor in Information Technology</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="terms">Select Terms <span class="text-danger">*</span></label>
                    <select id="terms" class="form-control" name="terms">
                        <option value="1st Year" {{ $form->terms == '1st Year' ? 'selected' : '' }}>1st Year</option>
                        <option value="2nd Year" {{ $form->terms == '2nd Year' ? 'selected' : '' }}>2nd Year</option>
                        <option value="3rd Year" {{ $form->terms == '3rd Year' ? 'selected' : '' }}>3rd Year</option>
                        <option value="4th Year" {{ $form->terms == '4th Year' ? 'selected' : '' }}>4th Year</option>
                        <option value="1st Semester" {{ $form->terms == 'st Semester' ? 'selected' : '' }}>1st Semester</option>
                        <option value="2nd Semester" {{ $form->terms == '2nd Semester' ? 'selected' : '' }}>2nd Semester</option>
                        <option value="3nd Semester" {{ $form->terms == '3rd Semester' ? 'selected' : '' }}>3rd Semester</option>
                        <option value="4th Semester" {{ $form->terms == '4th Semester' ? 'selected' : '' }}>4th Semester</option>
                        <option value="5th Semester" {{ $form->terms == '5th Semester' ? 'selected' : '' }}>5th Semester</option>
                        <option value="6th Semester" {{ $form->terms == '6th Semester' ? 'selected' : '' }}>6th Semester</option>
                        <option value="7th Semester" {{ $form->terms == '7th Semester' ? 'selected' : '' }}>7th Semester</option>
                        <option value="8th Semester" {{ $form->terms == '8th Semester' ? 'selected' : '' }}>8th Semester</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="form-group">
              <label for="type">Admission Type</label>
              <input id="type" class="form-control" type="text" name="type" value="{{ $form->type }}">
          </div>
           
        </div>
        

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="subject1">Priority Subject 1 <span class="text-danger">*</span></label>
                    <input id="subject1" class="form-control" type="text" name="subject1" required value="{{ $form->subject1 }}">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="subject2">Priority Subject 2 </label>
                    <input id="subject2" class="form-control" type="text" name="subject2" value="{{ $form->subject2 }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="subject3">Priority Subject 3 </label>
                    <input id="subject3" class="form-control" type="text" name="subject3" value="{{ $form->subject3 }}">
                </div>
            </div>

            {{-- <div class="col-md-4">
                <div class="form-group">
                    <label for="subject4">Priority Subject 4 </label>
                    <input id="subject4" class="form-control" type="text" name="subject4" value="{{ $form->subject4 }}">
                </div>
            </div> --}}
        </div>

        <label for="personal" class="my-4"><strong>Personal Details</strong></label>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="fullname">Full Name <span class="text-danger">*</span></label>
                    <input id="fullname" class="form-control" type="text" name="name" required value="{{ $form->name }}">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="parmanent">Parmanent Address <span class="text-danger">*</span></label>
                    <input id="parmanent" class="form-control" type="text" name="parmanent" required value="{{ $form->parmanent }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="temporary">Temporary Address</label>
                    <input id="temporary" class="form-control" type="text" name="temporary" value="{{ $form->temporary }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="mobile">Mobile No <span class="text-danger">*</span></label>
                    <input id="mobile" class="form-control" type="tel" name="mobile" required value="{{ $form->mobile }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ $form->email }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input id="dob" class="form-control" type="date" name="dob" value="{{ $form->dob }}">
                </div>
            </div>
            
        </div>

        <label for="guardian" class="my-4"><strong>Guardian Details</strong></label>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="father">Father/Mother Name <span class="text-danger">*</span></label>
                    <input id="father" class="form-control" type="tel" name="father" required value="{{ $form->father }}"> 
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="mobile">Mobile <span class="text-danger">*</span></label>
                    <input id="mobile" class="form-control" type="tel" name="fathermobile" required value="{{ $form->fathermobile }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="localguardian">Local Guardian <span class="text-danger">*</span></label>
                    <input id="localguardian" class="form-control" type="tel" name="guardian" required value="{{ $form->guardian }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="contact">Contact No <span class="text-danger">*</span></label>
                    <input id="contact" class="form-control" type="tel" name="contact" required value="{{ $form->contact }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
               <a href="{{ asset($form->photo) }}" target="_blank"><img src="{{ asset($form->photo) }}" alt="" class="img-fluid border"></a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset($form->slip) }}" target="_blank"><img src="{{ asset($form->slip) }}" alt="" class="img-fluid border"></a>
            </div>
            
        </div>

        <div  class="my-2">
            <a href="{{ asset($form->documents) }}" download="{{ asset($form->documents) }}">Click here to download document</a>
        </div>

    </form>
</div>
@endsection
