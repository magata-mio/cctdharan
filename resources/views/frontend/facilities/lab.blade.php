@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1>Laboratories</h1>
        <div class="row">
            <div class="col-md-4">
                <table class="table">
                    <tr>
                        <th>Type</th>
                        <th>No.of</th>
                    </tr>
                    
                    <tr>
                        <td>Chemistry</td>
                        <td>1</td>
                    </tr>
                    
                     <tr>
                        <td>Physics</td>
                        <td>4</td>
                    </tr>
                    
                     <tr>
                        <td>Biology</td>
                        <td>2</td>
                    </tr>
                    
                    <tr>
                        <td>Microbiology</td>
                        <td>3</td>
                    </tr>
                    
                    <tr>
                        <td>Molecular</td>
                        <td>1</td>
                    </tr>
                    
                     <tr>
                        <td>Biochemistry</td>
                        <td>1</td>
                    </tr>
                    
                     <tr>
                        <td>R & D*</td>
                        <td>2</td>
                    </tr>
                    
                    <tr>
                        <td>Cereal</td>
                        <td>1</td>
                    </tr>
                    
                     <tr>
                        <td>Food Engineering</td>
                        <td>1</td>
                    </tr>
                    
                    <tr>
                        <td>Computer</td>
                        <td>1</td>
                    </tr>
                    
                     <tr>
                        <td>Physiology</td>
                        <td>1</td>
                    </tr>
                    
                    <tr>
                        <td>Clinical Nutrition</td>
                        <td>1</td>
                    </tr>
                    
                    <tr>
                        <td>Quality Control</td>
                        <td>1</td>
                    </tr>
                    
                     <tr>
                        <td>Geology</td>
                        <td>2</td>
                    </tr>
                    
                     <tr>
                        <td>Dry Pilot Plant</td>
                        <td>1</td>
                    </tr>
                    
                      <tr>
                        <td>Wet Pilot Plant</td>
                        <td>1</td>
                    </tr>
                    
                    <tr>
                        <td>Dairy Pilot Plant</td>
                        <td>1</td>
                    </tr>
                    
                     <tr>
                        <td>Meat Pilot Plant</td>
                        <td>1</td>
                    </tr>
                    
                     <tr>
                        <th>Total</th>
                        <th>26</th>
                    </tr>
                    
                    
                    
                    
                    
                </table>
            </div>
            
            <div class="col-md-8">
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
                <img src="{{ asset('img/Geolab.jpg') }}" alt="" class="img-fluid">
                <center><div class="lead">Geology Lab 1</div></center>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/Geologylab.jpg') }}" alt="" class="img-fluid">
                <center><div class="lead">Geology Lab 2</div></center>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/Phd lab.jpg') }}" alt="" class="img-fluid">
                <center><div class="lead">PhD Lab</div></center>
            </div>
        </div>
            </div>
        </div>

    </div>
@endsection