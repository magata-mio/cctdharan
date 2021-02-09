@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1>Laboratories</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/B.Sc. Microbiology Lab.jpg') }}" alt="" class="img-fluid">
                <center><div class="lead">BSc.Microbiology</div></center>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('img/s5.jpg') }}" alt="" class="img-fluid">
                <center><div class="lead">MSc.Microbiology</div></center>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/Lab food quality control.jpg') }}" alt="" class="img-fluid">
                <center><div class="lead">Lab Food Quality Control</div></center>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('img/Lab Nutrition and Biochemistry.jpg') }}" alt="" class="img-fluid">
                <center><div class="lead">Nutrition and Biochemistry</div></center>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('img/Lab B.Tech.jpg') }}" alt="" class="img-fluid">
                <center><div class="lead">B.Tech.</div></center>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('img/Cereal lab.jpg') }}" alt="" class="img-fluid">
                <center><div class="lead">Cereal Lab</div></center>
            </div>

           

            <div class="col-md-4">
                <img src="{{ asset('img/Geo lab.jpg') }}" alt="" class="img-fluid">
                <center><div class="lead">Geology Lab</div></center>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('img/Geology Lab.jpg') }}" alt="" class="img-fluid">
                <center><div class="lead">Geology Lab</div></center>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('img/Phd lab.jpg') }}" alt="" class="img-fluid">
                <center><div class="lead">PhD Lab</div></center>
            </div>
        </div>

    </div>
@endsection