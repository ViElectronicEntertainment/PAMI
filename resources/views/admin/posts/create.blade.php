@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Crear Entrada</h5>
						<div class="card-text">
							{!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
								@include('admin.posts.partials.form')
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection