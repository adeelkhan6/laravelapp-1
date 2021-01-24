@extends('layout')

@section('head')

	<link rel="stylesheet" href="bootstrap.css">

@endsection

@section('content')


	<div id="wrapper">
		<div id="page" class="container">
			<h1>New Article</h1>

			<form action="{{ asset('/articles') }}" method="POST">
				@csrf
				<div>
					<label for="title">Title</label>
					{{-- <input class="{{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title"> --}}

					<input class="@error('title') is-danger @enderror" 
					type="text" 
					id="title"
					 name="title"
					 value="{{ old('title') }}">

					{{-- @if($errors->has('title'))
					<p>{{ $errors->first('title') }}</p>
					@endif --}}

					@error('title')
					<p>{{ $errors->first('title') }}</p>
					@enderror

				</div>
				
				<div>
					<label for="excerpt">Excerpt</label>
					<textarea class="@error('excerpt') is-danger @enderror"
					 name="excerpt"
					  id="excerpt">{{ old('excerpt') }}</textarea>

					  @error('excerpt')
						<p>{{ $errors->first('excerpt') }}</p>
					  @enderror

				</div>
			
				<div>
					<label for="body">Body</label>
					<textarea class="@error('body') is-danger @enderror" 
					name="body" 
					id="body">{{ old('body') }}</textarea>

					@error('body')
						<p>{{ $errors->first('body') }}</p>
					@enderror
				</div>

				<div>
					<label for="body">Tags</label>
					<select class="@error('body') is-danger @enderror" 
					name="tags[]"
					multiple>
						@foreach ($tags as $tag)
							<option value="{{ $tag->id }}">{{ $tag->name }}</option>
						@endforeach
					</select>

					@error('tags')
						<p>{{ $message }}</p>
					@enderror
				</div>
				
				<button style="margin: 25px; background-color: #f66d9b; color: white; 
				border-radius: 20px; padding: 10px; font-weight: bold;" type="submit">Submit</button>
			</form>
		</div>
	</div>
@endsection