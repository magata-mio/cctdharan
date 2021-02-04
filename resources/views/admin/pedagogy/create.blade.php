@extends('admin.templates.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="/pedagogy" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control ckeditor" name="description" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/pedagogy/{{ $pedagogy->id }}/edit" class="btn btn-success">Edit</a>
                </form>
            </div>
        </div>

      

       
    </div>
@endsection