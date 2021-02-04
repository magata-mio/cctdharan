@extends('frontend.templates.app')

@section('content')
    <div class="container">
        <h3>{{ $category->name }}</h3>
        <div class="row">
            @foreach ($category->notices as $notice)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            {{ $notice->subject }}
                        </div>
                        <div class="card body pb-1">
                            <p>
                                {{ $notice->description }}
                            </p>
                            <a href="{{ route('frontend.notice',$notice->id) }}"  class="btn btn-sm mb-2 btn-primary">
                                <span>
                                    <i class="fas fa-eye"></i> View
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection