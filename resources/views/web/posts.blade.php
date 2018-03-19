@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="container">
		<h1>Lista de Articulos</h1>
		@foreach($posts as $post)
		<div class="card">
			@if($post->file)
				<img src="{{ $post->file }}" class="card-img-top">
			@endif
			<div class="card-body">
				<h5 class="card-title"> {{$post->name}} </h5>
				<div class="card-text">	{{ $post->excerpt }}
					<a href="{{ route('post', $post->slug) }}" class="btn btn-primary">Leer Más</a>
				</div>				
			</div>
		</div>
		@endforeach
		{{$posts->render()}}
	</div>
</div>
@endsection