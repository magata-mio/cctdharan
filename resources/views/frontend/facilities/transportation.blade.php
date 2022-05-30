@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1>Transportation</h1>
        <div class="row">
            <div class="col-md-8">
                <p>
                    CCT has two new vehicles, a 30-seated bus and a 9-seated jeep, for transportation. The bus is used for educational tours and the jeep is mostly used for official purposes. Every year, CCT conducts around 18 to 20 educational tours.
                </p>
            </div>
            
            <div class ="col-md-4">
                 <img src="{{ asset('img/Transportation mediums.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>

    </div>
@endsection