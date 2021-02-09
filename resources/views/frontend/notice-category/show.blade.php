@extends('frontend.templates.app')

@section('content')
    <div class="container py-5">
        <h3>{{ $category->name }}</h3>
        @foreach ($category->notices as $notice)
           <div class="py-1">
               
                <a href="{{ $notice->file }}"  target="__blank">
                    <i class="fas fa-play"></i> {{ $notice->subject }} <span class="text-secondary">{{ $notice->created_at->diffForHumans() }}</span>
                </a>
                 @if ($notice->description)
                     <p>{{ $notice->description }}</p>
                 @endif
                
           </div>  
         
        @endforeach
    </div>
@endsection