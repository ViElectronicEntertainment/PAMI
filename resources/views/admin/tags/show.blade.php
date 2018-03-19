@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Ver Etiqueta</h5>
						<div class="card-text">
							<p><strong>Nombre:</strong> {{$tag->name}}</p>
							<p><strong>Slug:</strong> {{$tag->slug}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection