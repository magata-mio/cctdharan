@extends('admin.templates.app')
@section('content')
   <div class="container py-4">
    <div class="row py-2">
        <div class="col-md-12">
         <form action="/departments" method="post">
             @csrf
             <div class="form-group">
                 <label for="name"><h4>Title</h4></label>
                 <input id="name" class="form-control" type="text" name="name" placeholder="Department Name">
             </div>
 
             <div class="form-group">
                 <label for="editor"><h4>Description</h4></label>
                 <textarea id="editor" class="form-control" name="editor" rows="3"></textarea>
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
             
 
         </form>
        </div>
    </div>
   </div>
@endsection