@extends('admin.templates.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="/pedagogy" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="editor">Page Content</label>
                        <textarea id="editor" class="form-control" name="editor" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/pedagogy/{{ $pedagogy->id }}/edit" class="btn btn-success">Edit</a>
                </form>
            </div>
        </div>

      

       
    </div>
@endsection