@extends('admin.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/campusprofile" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control ckeditor" name="description" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection