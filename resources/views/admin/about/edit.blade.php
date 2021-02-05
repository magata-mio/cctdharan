@extends('admin.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/about/{{ $about->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="description">Page Content</label>
                        <textarea id="editor" class="form-control ckeditor" name="editor" rows="10">{{ $about->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/about/{{ $about->id }}/edit" class="btn btn-success">Edit</a>

                </form>
            </div>
        </div>
    </div>
@endsection