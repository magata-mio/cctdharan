@extends('admin.templates.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        Add Non Teaching Staff
                    </div>
                    <div class="card-body">
                        <form action="/nonteachingstaffs" method="post">
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input id="designation" class="form-control" type="text" name="designation">
                            </div>

                            <div class="form-group">
                                <label for="workplace">Workplace</label>
                                <input id="workplace" class="form-control" type="text" name="workplace">
                            </div>

                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select id="gender" class="form-control" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" class="form-control" name="status">
                                    <option value="permanent">Permanent</option>
                                    <option value="contract">Contract</option>
                                    <option value="permanent">Permanent</option>
                                    <option value="daily">Daily</option>
                                </select>
                            </div>
    
                            <div class="form-group">
                                <label for="image">Upload</label>
                                <input id="image" class="form-control-file" type="file" name="image">
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-secondary">
                        Member List
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Workplace</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection