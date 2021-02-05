@extends('frontend.templates.app')

@section('content')
    <div class="container">
        <h3>{{ $category->name }}</h3>
        @foreach ($category->notices as $notice)
           <div>
                <div class="lead">{{ $notice->subject }}</div>
                <a href="{{ $notice->file }}"  target="__blank">
                    <i class="fas fa-download"></i> Download File
                </a>
                 @if ($notice->description)
                     <p>{{ $notice->description }}</p>
                 @endif
                 <br>
                <p class="text-small fs-6 text-secondary">{{ $notice->created_at->diffForHumans() }}</p>
           </div>  
           <hr>   
        @endforeach
    </div>
@endsection