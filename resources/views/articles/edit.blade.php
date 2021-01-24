@extends('layout')

@section('content')

    <div id="wrapper">
		<div id="page" class="container">
			<h1>Update Article</h1>

			<form action="{{ asset('/articles') }}/{{ $article->id }}" method="POST">
				@csrf
                @method('PUT')
				<div>
					<label for="title">Title</label>
					<input type="text" name="title" value="{{ $article->title }}">
				</div>
				
				<div>
					<label for="excerpt">Excerpt</label>
					<textarea name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>
				</div>
			
				<div>
					<label for="body">Body</label>
					<textarea name="body" id="body">{{ $article->body }}</textarea>
				</div>
				
				<button style="margin: 25px; background-color: #f66d9b; color: white; 
				border-radius: 20px; padding: 10px; font-weight: bold;" type="submit">Submit</button>
			</form>
		</div>
	</div>

@endsection