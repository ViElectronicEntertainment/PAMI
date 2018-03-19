@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Lista de mis Entradas
							<a href="{{ route('posts.create') }}" class="btn btn-success float-right">Crear</a></h5>
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
									@foreach($posts as $post)
									<tr>
										<th scope="row">{{ $post->id}} </th>
										<td>{{ $post->name }}</td>
										<td align="right">
											<div class="btn-group">
												<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</button>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="{{ route('posts.show', $post->id) }}" class="dropdown-item">Ver</a>
													<a href="{{ route('posts.edit', $post->id) }}" class="dropdown-item">Editar</a>
													{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
													<button href="{{ route('posts.show', $post->id) }}" class="dropdown-item">Eliminar</button>
													{!! Form::close() !!}
												</div>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						{{ $posts->render() }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection