@extends('layout')

@section('content')
<div>
  <h2>
    {{ $product->name}}
    <span> - ID - </span>
    {{ $product->id}}
    <a href="{{ route('products.edit', $product->id )}}" class="btn btn-info float-right">Editar</a>
  </h2>
  <p>
    {{ $product->short }}
  </p>
  {!! $product->body !!}
</div>

<div>
  @include('products.fragments.aside')
</div>
@endsection