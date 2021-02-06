@extends('admin.templates.app')
@section('content')
    <div class="container py-4 ">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm table-bordered table-striped">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($profiles as $profile)
                        <tr>
                            <td>{{ $profile->id }}</td>
                            <td>{{ $profile->title }}</td>
                            <td><a href="/cprofile/{{ $profile->id }}/edit">Edit</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection