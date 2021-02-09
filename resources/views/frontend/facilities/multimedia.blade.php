@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1>Computers/Internet/Multimedia</h1>
        <div class="row">
    
            <div class="col-md-12">
               <p>
                The campus has more than 70 very high-end desktop computers, several laptops, and classrooms with multimedia projectors. There is unlimited internet connectivity from two ISPs, viz:(1) NTCs fiber net service and NT-wifi , and  (2) WordLink  network PVT.LTD.
                Only general introduction about computers, multimedia and internet
               </p>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/It room Library.jpg') }}" alt="" class="img-fluid">
                        <center><strong>IT Room Library</strong></center>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('img/s2.jpg') }}" alt="" class="img-fluid">
                        <center><strong>ICT Lab</strong></center>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection