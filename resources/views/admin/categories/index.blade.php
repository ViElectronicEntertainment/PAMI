@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Lista de Categorias
							<a href="{{ route('categories.create') }}" class="btn btn-success float-right">Crear</a></h5>
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
									@foreach($categories as $category)
									<tr>
										<th scope="row">{{ $category->id}} </th>
										<td>{{ $category->name }}</td>
										<td align="right">
											<div class="btn-group">
												<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</button>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="{{ route('categories.show', $category->id) }}" class="dropdown-item">Ver</a>
													<a href="{{ route('categories.edit', $category->id) }}" class="dropdown-item">Editar</a>
													{!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
													<button href="{{ route('categories.show', $category->id) }}" class="dropdown-item">Eliminar</button>
													{!! Form::close() !!}
												</div>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						{{ $categories->render() }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection