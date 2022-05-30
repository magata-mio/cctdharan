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
                        <form action="/nonteachingstaffs/{{ $staff->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Full Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Full Name" value="{{ $staff->name }}">
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender <span class="text-danger">*</span></label>
                                <select id="gender" class="form-control" name="gender">
                                    <option value="Male" {{ "Male" == $staff->gender ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ "Female" == $staff->gender ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="workplace">Workplace <span class="text-danger">*</span></label>
                                <input id="workplace" class="form-control" type="text" name="workplace" placeholder="eg.Chemistry lab" value="{{ $staff->workplace }}">
                            </div>

                            <div class="form-group">
                                <label for="designation">Designation <span class="text-danger">*</span></label>
                                <input id="designation" class="form-control" type="text" name="designation" placeholder="eg. Section Officer" value="{{ $staff->designation }}">
                            </div>

                            <div class="form-group">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select id="status" class="form-control" name="status">
                                    <option value="Permanent" {{ "Permanent" == $staff->status ? 'selected' : '' }}>Permanent</option>
                                    <option value="Contract"> {{ "Contract" == $staff->status ? 'selected' : '' }}>Contract</option>
                                    <option value="Part-time" {{ "Part-time" == $staff->status ? 'selected' : '' }}>Part Time</option>
                                    <option value="Daily" {{ "Daily" == $staff->status ? 'selected' : '' }}>Daily</option>
                                </select>
                            </div>
    
                            <div class="form-group">
                                <label for="image">Upload Image (Optional)</label>
                                <input id="image" class="form-control-file" type="file" name="image">
                            </div>

                            <div class="my-2">
                                <img src="{{ asset($staff->image) }}" alt="">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
@endsection