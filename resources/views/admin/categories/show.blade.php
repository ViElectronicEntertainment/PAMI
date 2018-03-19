@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Ver Categoria</h5>
						<div class="card-text">
							<p><strong>Nombre:</strong> 	{{$category->name}}</p>
							<p><strong>Slug:</strong> 		{{$category->slug}}</p>
							<p><strong>Contenido:</strong> 	{{$category->body}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection