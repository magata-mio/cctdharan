@extends('admin.templates.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Add Popup</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('popups.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">{{ __('Title') }}</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                name="title" value="{{ old('title') }}" required
                                autocomplete="title" autofocus>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>(
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link">{{ __('Add Link') }}</label>
                            <input id="link" type="url" class="form-control @error('link') is-invalid @enderror"
                                name="link" value="{{ old('link') }}"
                                autocomplete="link" autofocus>
                            @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>(
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="visible">Visibility</label>
                            <select name="show" id='visible' class="form-control">
                                <option value=0 @if(old('show')==0) selected @endif>Hidden</option>
                                <option value=1 @if(old('show')==1) selected @endif>Visible</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Description</label>
                            <textarea name="message" class="ckeditor form-control" rows="5" placeholder="Event Description"
                                required> {{ old('message') }} </textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-success float-right ml-2">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Notice List</strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead class="bg-dark">
                            <th>#</th>
                            <th>Title</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($popups as $index=>$popup)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $popup->title }}</td>
                                    <td>{!! Str::limit($popup->message,20,$end='...') !!}</td>
                                    <td>
                                        <form action="{{ route('popups.destroy',$popup->id) }}" onsubmit="return confirm('Are You Sure You Want To Delete?')" method="post">
                                            <a href="{{ route('popups.edit', $popup->id) }}"
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