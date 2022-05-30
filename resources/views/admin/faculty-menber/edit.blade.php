@extends('admin.templates.app')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                       <a href="/fmembers" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/fmembers/{{ $fmember->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input id="designation" class="form-control" type="text" name="designation" value="{{ $fmember->designation }}">
                            </div>
    
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select id="gender" class="form-control" name="gender">
                                    <option value="male" {{ $fmember->gender == 'male' ? 'selected' : '' }}">Male</option>
                                    <option value="female" {{ $fmember->gender }} {{ $fmember->gender == 'female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ $fmember->name }}">
                            </div>
    
                            <div class="form-group">
                                <label for="subject">Department</label>
                                <select class="form-control" name="department_id">
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}" {{ $fmember->department_id == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
    
    
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input id="phd" class="form-check-input" type="checkbox" name="phd" value="phd" {{ $fmember->phd =='phd' ? 'checked' : '' }}>
                                        <label for="phd" class="form-check-label">PHD</label>
                                    </div>
                                </div>
    
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input id="phd" class="form-check-input" type="checkbox" name="phd" value="scholar" {{ $fmember->phd =='scholar' ? 'checked' : '' }}>
                                        <label for="phd" class="form-check-label">Scholar</label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" class="form-control" name="status">
                                    <option value="permanent" {{ $fmember->status == 'permanent' ? 'selected' : '' }}>Permanent</option>
                                    <option value="contract" {{ $fmember->status == 'contract' ? 'selected' : '' }}>Contract</option>
                                    <option value="part-time" {{ $fmember->status == 'part-time' ? 'selected' : '' }}>Part Time</option>
                                    <option value="daily" {{ $fmember->status == 'daily' ? 'selected' : '' }}>Daily</option>
                                </select>
                            </div>
    
                            <div class="form-group">
                                <label for="image">Upload</label>
                                <input id="image" class="form-control-file" type="file" name="image" value="{{ $fmember->image }}">
                            </div>
    
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
    
         
        </div>
    </div>
@endsection