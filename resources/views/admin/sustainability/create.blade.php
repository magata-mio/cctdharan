@extends('admin.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <a href="/sustainability/{{ $data->id }}/edit" class="btn btn-danger btn-sm my-2">Edit</a>
            <div class="col-md-12">
                <form action="/sustainability" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="editor">Page Content</label>
                        <textarea id="editor" class="form-control" name="editor" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>

        
            
        </div>
       
    </div>
@endsection