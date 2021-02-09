@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1>Water Fountain</h1>
        <div class="row">
            

            <div class="col-md-12">
                <p>
                    The campus has constructed a water fountain along with monument of the elephant as the illustration of its renowned name “Hattisar”.
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/water fountain.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection