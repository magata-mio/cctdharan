@extends('admin.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/cprofile" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="description">Page Content</label>
                        <textarea id="editor" class="form-control" name="editor" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/cprofile/{{ $cprofile->id }}/edit" class="btn btn-primary">Edit</a>
                </form>
            </div>
        </div>
    </div>
@endsection