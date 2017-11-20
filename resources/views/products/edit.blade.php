@extends('layout')

@section('content')
<div class="col-sm-8">
  <h2>
    Editar producto numero {{ $product->id}}
    <a href="{{ route('products.index')}}" class="btn btn-info float-right">Listado</a>
  </h2>
  {!! Form:model($product, ['route' => ['products.update', $product->id, 'method' => 'PUT']]) !!}
	
    @include('products.fragments.form')

  {!! Form:close() !!}
</div>

<div class="col-sm-4">
  @include('products.fragments.aside')
</div>
@endsection