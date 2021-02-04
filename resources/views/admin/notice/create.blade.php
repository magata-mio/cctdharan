@extends('admin.templates.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary">
                    New Notice
                </div>
                <div class="card-body">
                     <form action="" method="post">
                         <div class="form-group">
                             <label for="subject">Subject</label>
                             <input id="subject" class="form-control" type="text" name="subject">
                         </div>
                         <div class="form-group">
                             <label for="description">description</label>
                             <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                         </div>
                         <div class="form-group">
                             <label for="category">Category</label>
                             <select id="category" class="form-control" name="category">
                                 <option>General Notice</option>
                                 <option>Department Notice</option>
                                 <option>General Notice</option>
                             </select>
                         </div>

                         <div class="form-group">
                             <label for="file">Upload</label>
                             <input id="file" class="form-control-file" type="file" name="file">
                         </div>

                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-secondary">
                    Recent Notice
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection