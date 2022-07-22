@extends('admin.templates.app')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 text-bold">Carousel Slider</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="">
                            Create Carousel
                        </h5>
                        <a href="/carousel/create" class="btn btn-secondary">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
    </script> --}}
@endsection
