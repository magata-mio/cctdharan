@extends('admin.templates.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/nonteachingstaffs" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <div class="my-2">
                                <div class="alert alert-success">{{ session('message') }}</div>
                            </div>
                        @endif
                        <form action="/nonteachingstaffs" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Full Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Full Name">
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender <span class="text-danger">*</span></label>
                                <select id="gender" class="form-control" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="workplace">Workplace <span class="text-danger">*</span></label>
                                <input id="workplace" class="form-control" type="text" name="workplace" placeholder="eg.Chemistry lab">
                            </div>

                            <div class="form-group">
                                <label for="designation">Designation <span class="text-danger">*</span></label>
                                <input id="designation" class="form-control" type="text" name="designation" placeholder="eg. Section Officer">
                            </div>

                            <div class="form-group">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select id="status" class="form-control" name="status">
                                    <option value="Permanent">Permanent</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Part-time">Part Time</option>
                                    <option value="Daily">Daily</option>
                                </select>
                            </div>
    
                            <div class="form-group">
                                <label for="image">Upload Image (Optional)</label>
                                <input id="image" class="form-control-file" type="file" name="image">
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>

                        </form>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
@endsection