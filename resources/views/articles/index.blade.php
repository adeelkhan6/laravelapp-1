@extends('layout')

@section('content')

<div id="wrapper">
    <div id="page" class="container">

        @forelse ($articles as $article)
       
            <div id="content">
                <div class="title">
                    <h2>
                        {{-- <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a> --}}
                        <a href="{{ $article->path() }}">
                            {{ $article->title }}
                        </a>

                    </h2>
                </div>

                <p>
                    <img src="{{ asset('images/banner.jpg') }}" alt="" class="image image-full" /> 
                </p>
                
                <p>{!! $article->excerpt !!}</p>
            </div>

        
        @empty
            <p>No relevant articles yet.</p>
        @endforelse
    </div> 
</div>

@endsection