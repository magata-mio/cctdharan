@extends('admin.templates.app')
@section('content')
   <div class="container py-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/fmembers" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="/fmembers" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input id="designation" class="form-control" type="text" name="designation">
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select id="gender" class="form-control" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>

                        <div class="form-group">
                            <label for="subject">Department</label>
                            <select class="form-control" name="department_id">
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input id="phd" class="form-check-input" type="checkbox" name="phd" value="phd">
                                    <label for="phd" class="form-check-label">PHD</label>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-check">
                                    <input id="phd" class="form-check-input" type="checkbox" name="phd" value="scholar">
                                    <label for="phd" class="form-check-label">Scholar</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" class="form-control" name="status">
                                <option value="permanent">Permanent</option>
                                <option value="contract">Contract</option>
                                <option value="part-time">Part Time</option>
                                <option value="daily">Daily</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">Upload</label>
                            <input id="image" class="form-control-file" type="file" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

       
    </div>
   </div>
@endsection