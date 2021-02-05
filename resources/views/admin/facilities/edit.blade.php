@extends('admin.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <a href="/facilities/{{ $facility->id }}/edit" class="btn btn-danger btn-sm my-2">Edit</a>
            <a href="/facilities/create" class="btn btn-primary btn-sm my-2 mx-2">Back</a>
            <div class="col-md-12">
                <form action="/facilities/{{ $facility->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="editor">Page Content</label>
                        <textarea id="editor" class="form-control" name="editor" rows="10">{{ $facility->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>

        
            
        </div>
       
    </div>
@endsection