@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1>Extra Curriculam <span>Activities</span></h1>
        
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/Table tennis and badminton court.jpg') }}" alt="" class="img-fluid">
            </div>
    
            <div class="col-md-8">
                <p>
                    The campus has facilities for both outdoor and indoor games. It has a well-maintained ground north to the classroom block for outdoor games like football, cricket, volleyball and basketball. Indoor games like badminton and table tennis are played inside the classroom block as there is no separate covered hall.
                </p>
                <h5>Sports</h5>
                All the sports materials are provided by the campus. Annual games are formally organized by the campus; but, Student Unions and Organizations, too, organize separate tournaments, such as Students’ Union Cup, NEFTSA Cup, NSAM Cup, APS Cup, GSS Cup etc. Apart from these inter- and intra-program tournaments, students also take part in inter-campus tournaments. Occasionally, friendly matches like volleyball and football between teachers, students and administrative staffs are arranged. Likewise, Teachers’ Union and Employees’ Union also organize tournaments. Certificates of participation and prizes are given away formally at especially organized prize distribution ceremony or during other relevant programs. In addition, brain storming activities like essay competition, quiz contest, colloquiums are also organized.
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-3 order-md-last">
                <img src="{{ asset('img/Football and cricket ground 1.jpg') }}" alt="" class="img-thumbnail">
            </div>

            <div class="col-md-3 order-md-last">
                <img src="{{ asset('img/Football and cricket ground 2.jpg') }}" alt="" class="img-thumbnail">
            </div>

            <div class="col-md-3 order-md-last">
                <img src="{{ asset('img/Basketball Court.jpg') }}" alt="" class="img-thumbnail">
            </div>

            <div class="col-md-3 order-md-last">
                <img src="{{ asset('img/Prize distribution.jpg') }}" alt="" class="img-thumbnail">
            </div>

           
        </div>

    </div>
@endsection