@extends('admin.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/pedagogy/{{ $pedagogy->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="editor">Page Content</label>
                        <textarea id="editor" class="form-control ckeditor" name="editor" rows="10">{{ $pedagogy->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/pedagogy/{{ $pedagogy->id }}/edit" class="btn btn-success">Edit</a>
                </form>
            </div>
        </div>

       
    </div>
@endsection