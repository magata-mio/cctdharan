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
                        <form action="carousel" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" name="title" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="mb-3">
                                        <input type="file" name="image" id="" oninput="pic.src=window.URL.createObjectURL(this.files[0])"> <br>
                                    </div>
                                    
                                </div>
                                <div class="col-md-8 text-center">
                                    
                                    <img id="pic" src="" width="300" height="200"/>
                                </div>
                                <button type="submit" class="btn shadow-none btn-secondary">
                                    Create <i class="fas fa-plus-circle"></i>
                                </button>
                            </div>
                        </form>
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
