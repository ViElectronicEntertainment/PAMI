@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Crear Categoria</h5>
						<div class="card-text">
							{!! Form::open(['route' => 'categories.store']) !!}
								@include('admin.categories.partials.form')
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection