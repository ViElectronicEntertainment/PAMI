@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Editar Categoria</h5>
						<div class="card-text">
							{!! Form::model($category, ['route' =>['categories.update',$category->id],
							'method' => 'PUT']) !!}
								@include('admin.categories.partials.form')
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection