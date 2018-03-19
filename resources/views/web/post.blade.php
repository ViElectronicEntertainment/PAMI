@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="container">
		<h1>{{$post->name}}</h1>
		<div class="card">
			@if($post->file)
				<img src="{{ $post->file }}" class="card-img-top">
			@endif
			<div class="card-body">
				<h5>Categoria: <a href="{{route('category', $post->category->slug)}}" class="card-title">
					{{$post->category->name}}
				</a></h5>
				<div class="card-text">	{{ $post->excerpt }}
					<hr>
					{{!! $post->body !!}}
					<hr>
					Etiquetas
					@foreach($post->tags as $tag)
					<a href="{{route('tag', $tag->slug)}}">{{$tag->name}}</a> - 
					@endforeach
				</div>			
			</div>
		</div>
	</div>
</div>
@endsection