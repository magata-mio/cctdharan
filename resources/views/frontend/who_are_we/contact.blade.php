@extends('frontend.templates.app')

@section('content')
   <div class="container my-5">
       <h1>Contact <span>us</span></h1>
       <p>if you have any query please feel free to ask us</p>
       <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('img/Campus view.jpg') }}" alt="" class="img-fluid">
        </div>
          <div class="col-md-6">
              <form action="" method="post">
                  <div class="form-group">
                      <label for="name">Full Name</label>
                      <input id="name" class="form-control" type="text" name="name">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="email" name="email">
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input id="mobile" class="form-control" type="tel" name="mobile">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" class="form-control" name="message" rows="3"></textarea>
                </div>

                <button type="submit" class="btn text-white mt-2 ml-auth" style="background: #0077B6">Send Message</button>
              </form>
          </div>
       </div>
   </div>
@endsection