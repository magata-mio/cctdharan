@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1 class="fs-4">Online Form</h1>
        <form action="" method="post">
            <div class="row">
                 {{-- First Name --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input id="firstName" class="form-control" type="text" name="firstName">
                    </div>
                </div>

                {{-- Middle Name --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="middleName">Middle Name</label>
                        <input id="middleName" class="form-control" type="text" name="middleName">
                    </div>
                </div>

                {{-- Last Name --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input id="lastName" class="form-control" type="text" name="lastName">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection