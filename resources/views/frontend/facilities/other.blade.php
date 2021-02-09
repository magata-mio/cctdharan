@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1>Other Facilities</h1>
        <div class="row">
            
            <div class="col-md-4">
                <img src="{{ asset('img/water resource owned by cct.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <p>
                    CCT has Bought 15 kattha of land at Shivajatta and managed its own water resource. It has planted varieties of plants in the area and has built an aluminum wire fence around the land toprotect the water resource. Likewise, CCT has installed a water treatment plant that can produce 3000 liters of drinking water per hour. This is more than sufficient for the CCT family.
                </p>

                <p>
                    At the moment, Nepal electricity Authority (NEA) is the sole source of electricity. For office use, it has already installed hybrid solar panel set. It is also planning to install similar renewable power supply for Research and Management cell (RMC) and library, adequate enough to run at least 20 PCs and some electronic equipment during the day time.
                </p>

                <p>
                    Further the campus has constructed program stage, installed sanitary pad vending machine, has several washrooms, first aid room (medical room), and a bike parking shed.
                </p>

                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('img/Medical room.jpg') }}" alt="" class="img-fluid">
                        <center><strong>Medical Room</strong></center>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/s7.jpg') }}" alt="" class="img-fluid">
                        <center><strong>Program Stage</strong></center>
                    </div>
                </div>
               
            </div>
        </div>

    </div>
@endsection