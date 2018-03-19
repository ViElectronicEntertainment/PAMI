@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Editar Etiqueta</h5>
						<div class="card-text">
							{!! Form::model($tag, ['route' =>['tags.update',$tag->id],
							'method' => 'PUT']) !!}
								@include('admin.tags.partials.form')
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection