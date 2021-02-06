@extends('admin.templates.app')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <form action="/governingbodies" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title"><h4>Title</h4></label>
                        <input id="title" class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description"><h4>Description</h4></label>
                        <textarea id="editor" class="form-control" name="editor" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                   
                </form>
            </div>
        </div>

       
    </div>
@endsection