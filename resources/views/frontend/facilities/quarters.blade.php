@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1>Quarters</h1>
        <div class="row">
           
            <div class="col-md-12">
                <h5>Teachers & Staff Quarters</h5>
               <p>
                There are 12 teacher quarters of C and B type accommodating 17 families, a 6-room guest house, and a two story staff quarts for 4 families.
              
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/Staff quarter.jpg') }}" alt="" class="img-fluid">
                        <center><strong>Staff Quarters</strong></center>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('img/Teachers Quarters.jpg') }}" alt="" class="img-fluid">
                         <center> <strong>Teacher Quarters</strong></center>
                    </div>
                    
        
                </div>
               </p>
            </div>
        </div>

    </div>
@endsection