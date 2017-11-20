@extends('layout')

@section('content')
<div>
  <h2>
    Listado de Productos
    <a href="{{ route('products.create') }}" class="btn btn-primary float-right">Nuevo</a>
  </h2>
  @include('products.fragments.info')
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th width="20px" scope="col">ID</th>
      <th scope="col">Nombre del producto</th>
      <th colspan="3" scope="col">&nbsp</th>
    </tr>
  </thead>
<tbody>
@foreach($products as $product)
<tr>
  <td>{{ $product->id }}</td>
  <td>
    <strong>{{ $product->name }}</strong>
    {{ $product->short}}
  </td>
  <td><a href="{{ route('products.show', $product->id )}}" class="btn btn-info">Ver</a></td>
  <td><a href="{{ route('products.edit', $product->id )}}" class="btn btn-warning">Editar</a></td>
  <td>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="DELETE">
      <button class="btn btn-danger">Borrar</button>
    </form>
  </td>
</tr>
@endforeach
</tbody>
</table>
{!! $products->render() !!}
</div>
<div>
  <h3>Ayuda...</h3>
    @include('products.fragments.aside')
</div>
@endsection