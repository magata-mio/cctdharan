@extends('frontend.templates.app')

@section('content')
    
    <div class="container-fluid mt-4 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('img/logo.png') }}" alt="Tribhuvan University" class="img-fluid">
                    </div>
                    <div class="col-8 text-center">
                        <b>Tribhuvan University</b>
                        <b>Institute of Science & Technology, Dharan</b>
                        <b>4 Years Bachelor's Degree in Nutrition & Dietetics</b>
                        <b>Entrance Examination 2077</b>
                        <h5>ADMIT CARD</h5>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div>
                            <span class="fw-bold"> Entrance Exam Roll No.: </span>  {{ $form->id }}
                        </div>
                        <div>
                           <span class="fw-bold">Name:</span>  {{ $form->firstName }} {{ $form->middleName }} {{ $form->lastName }}
                        </div>
                        <div class="row">
                            <span class="col"> <span class="fw-bold">Exam Center:</span>  Dharan</span> <span class="col"><strong>Date:</strong> 2077/11/26 <br> <strong>Tiime:</strong> 12:00pm - 02:00pm</span> 
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset($form->ppphoto) }}" alt="" class="img-thumbnail" width="120">
                    </div>
                </div>
                <div class="row mt-4 mb-4 text-center">
                    <div class="col-4">
                        <br><br>
                        <hr>
                        Applicant Signature
                    </div>
                    <div class="col-4">
    
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('signature/signature.png') }}" alt="" width="32">
                        <hr>
                        Campus Chief
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 text-center fst-italic">
                        Student Must Bring This Admit Card On The Day Of Examination.  
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    </div>

@endsection