@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1>Saraswoti Temple</h1>
        <div class="row">
            

            <div class="col-md-12">
                <p>
                    There is a small Saraswoti (the goddess of knowledge and wisdom) temple in the campus premise, north-west to the classroom block. It was established in 1990 under the active initiation of the then students, teachers, staffs, and the local people. Every year, a grand Saraswoti puja is carried out. Students from schools in the vicinity also come here to offer prayer and receive blessing from the goddess.
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/Saraswoti temple.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection