@extends('welcome')
@section("contenido1")

<h2 class="text-center">Categorías</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
    </tr>
  </thead>
  <tbody>

  @foreach($categorias as $categoria)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $categoria->nombre }}</td>
      <td>{{ $categoria->descripcion }}</td>
    </tr>
   @endforeach
  </tbody>

  
</table>

<div class="text-center">
<a class="btn btn-primary" href=" {{ url( 'categorias/create' ) }} " role="button">Nuevo</a>
</div>

@endsection