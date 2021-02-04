@extends('admin.templates.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary">
                    New Notice
                </div>
                <div class="card-body">
                     <form action="{{ route('notices.update',$notice->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @if($notice->file)
                        <a href="{{ $notice->file }}" class="btn btn-primary float-right" target="__blank">
                            <i class="fas fa-download"></i>
                        </a>
                        @endif
                        <div class="form-group">
                             <label for="subject">Subject</label>
                             <input id="subject" class="form-control" value="{{ $notice->subject }}" type="text" name="subject">
                         </div>
                         <div class="form-group">
                             <label for="description">Description</label>
                             <textarea id="description" class="form-control" name="description" rows="3">{{ $notice->description }}</textarea>
                         </div>
                         <div class="form-group">
                             <label for="notice_category_id">Category</label>
                             <select id="notice_category_id" class="form-control" name="notice_category_id">
                                 @foreach ($categories as $category)
                                     <option value="{{ $category->id }}" @if($notice->notice_category_id==$category->id) selected @endif>{{ $category->name }}</option>
                                 @endforeach
                             </select>
                         </div>

                         <div class="form-group">
                             <label for="upload_file">Upload</label>
                             <input id="upload_file" class="form-control-file" type="file" name="upload_file">
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
                    <table class="table table-sm table-striped table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notices as $index=>$notice)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $notice->subject }}</td>
                                    <td>
                                        {{ $notice->category->name??'' }}
                                    </td>
                                    <td>
                                        <form action="{{ route('notices.destroy',$notice->id) }}" onsubmit="return confirm('Are You Sure?')" method="post">
                                            <a href="{{ route('notices.edit', $notice->id) }}"
                                                class="btn btn-outline-primary btn-sm">
                                                    <i class="fas fa-pen"></i> Edit
                                                </a>
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger btn-sm ml-2">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection