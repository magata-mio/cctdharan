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
                        <b>Institute of Science & Technology, Kirtipur</b>
                        <b>4 Years Bachelor's Degree in Food Technology(B.Tech., Food)</b>
                        <b>Entrance Examination 2077</b>
                        <h5>ADMIT CARD</h5>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div>
                            <span class="font-weight-bold"> Entrance Exam Roll No.: </span>  {{ $form->id+8000 }}
                        </div>
                        <div>
                           <span class="font-weight-bold">Name:</span>  {{ $form->firstName }} {{ $form->middleName }} {{ $form->lastName }}
                        </div>
                        <div class="row">
                            <span class="col"> <span class="font-weight-bold">Exam Center:</span>  Dharan</span> <span class="col">Date: {{ $form->created_at->format('Y/m/d') }}</span> 
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset($form->ppphoto) }}" alt="" class="img-thumbnail">
                    </div>
                </div>
                <div class="row mt-4 mb-4 text-center">
                    <div class="col-4">
                        <hr>
                        Full Signature Of The Applicant
                    </div>
                    <div class="col-4">
    
                    </div>
                    <div class="col-4">
                        <hr>
                        Assistant Dean
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