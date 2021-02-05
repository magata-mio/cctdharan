@extends('admin.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <a href="/sustainability/{{ $data->id }}/edit" class="btn btn-danger btn-sm my-2">Edit</a>
            <div class="col-md-12">
                <form action="/sustainability/{{ $data->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="description">Page Content</label>
                        <textarea id="editor" class="form-control" name="editor" rows="10">{{ $data->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                   
                </form>
            </div>
        </div>
    </div>
@endsection