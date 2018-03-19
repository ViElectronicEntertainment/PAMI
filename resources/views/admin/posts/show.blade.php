@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Ver Entrada</h5>
						<div class="card-text">
							<p><strong>Nombre:</strong> 	{{$post->name}}</p>
							<p><strong>Slug:</strong> 		{{$post->slug}}</p>
							<p><strong>Contenido:</strong> 	{{$post->body}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection