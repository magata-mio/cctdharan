@extends('admin.templates.app')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        Edit Notice Category
                    </div>
                    <div class="card-body">
                        <form action="{{ route('noticecategories.update',$noticecategory->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Notice Category</label>
                                <input id="name" class="form-control" value="{{ $noticecategory->name }}" type="text" name="name" placeholder="Notice Category">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-secondary">
                        Category List
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped table-bordered" id='datatable'>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $index=>$category)
                                    <tr>
                                        <td>{{ ++$index}}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <form action="{{ route('noticecategories.destroy',$category->id) }}" onsubmit="return confirm('Are You Sure?')" method="post">
                                                <a href="{{ route('noticecategories.edit', $category->id) }}"
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
    </div>
@endsection