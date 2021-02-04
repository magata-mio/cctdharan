@extends('frontend.templates.app')
@section('content')
    <div class="container">
        {!! $profile->description !!}
    </div>

    <div class="container mt-4">
        <div class="row">
            <h1 class="fs-4">Our Location</h1>
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7121.2257240558265!2d87.28194387517382!3d26.820452929776426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd454e4bda1ff6d5!2sCentral%20Campus%20of%20Technology!5e0!3m2!1sen!2snp!4v1612408111398!5m2!1sen!2snp"  height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="w-100"></iframe>
            </div>
        </div>  
    </div>
@endsection