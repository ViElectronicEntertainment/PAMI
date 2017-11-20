@extends('layout')

@section('content')
<div>
  <h2>
    Nuevo producto
    <a href="{{ route('products.index')}}" class="btn btn-info float-right">Listado</a>
  </h2>

  formulario
</div>

<div>
  @include('products.fragments.aside')
</div>
@endsection