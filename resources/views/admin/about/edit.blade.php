@extends('admin.templates.app')
@section('content')
    <div class="container py-4">
        <a href="/about" class="btn btn-sm btn-primary">Back</a>
        <div class="row py-2">
            <div class="col-md-12">
                <form action="/about/{{ $about->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title"><h4>Title</h4></label>
                        <input id="title" class="form-control" type="text" name="title" value="{{ $about->title }}">
                    </div>
                    <div class="form-group">
                        <label for="description"><h4>Description</h4></label>
                        <textarea id="editor" class="form-control ckeditor" name="editor" rows="10">{{ $about->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                   
                </form>
            </div>
        </div>
    </div>
@endsection