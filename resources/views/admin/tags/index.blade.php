@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Lista de Etiquetas
							<a href="{{ route('tags.create') }}" class="btn btn-success float-right">Crear</a></h5>
						<div class="card-text">
							</br>
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">ID</th>
										<th scope="col">Nombre</th>
										<th scope="col">&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									@foreach($tags as $tag)
									<tr>
										<th scope="row">{{ $tag->id}} </th>
										<td>{{ $tag->name }}</td>
										<td align="right">
											<div class="btn-group">
												<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</button>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="{{ route('tags.show', $tag->id) }}" class="dropdown-item">Ver</a>
													<a href="{{ route('tags.edit', $tag->id) }}" class="dropdown-item">Editar</a>
													{!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
													<button href="{{ route('tags.show', $tag->id) }}" class="dropdown-item">Eliminar</button>
													{!! Form::close() !!}
												</div>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						{{ $tags->render() }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection