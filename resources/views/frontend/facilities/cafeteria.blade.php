@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1>Cafeteria</h1>
        <div class="row">
            

            <div class="col-md-12">
                <p>
                    There are two cafeterias in the campus premises. One is open for all the students, teachers and staffs and has separate chambers for teachers/staffs and the students. Whereas, the other, which is within the girls’ hostel’s compound, is for the hostel’s girls. Students can have meals, snack, cold drinks and tea at nominal prices (fixed through an agreement with the campus). Selling of addictive item like tobacco, cigarettes and alcoholic beverages is strictly prohibited. It can serve at least of 50 peoples at a time.
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/Cafeteria.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection