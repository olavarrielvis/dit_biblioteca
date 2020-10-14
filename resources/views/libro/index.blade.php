@extends('welcome')

@section("contenido1")

<h2 class="text-center">Libros</h2>


<form class="form-inline" action=" {{ url( '/libros/filtro' ) }} " method="post" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="form-group mb-2">
    <label for="staticEmail2" >Categoría : </label>
 </div>
  <div class="form-group mx-sm-3 mb-2">
  <select class="form-control" id="categoria_id" name="categoria_id">
    <option value="0" > TODOS </option>
    @foreach($categorias as $c)
        @if( isset($seleccionado ) )
            @if( $seleccionado == $c->id )
                <option value="{{$c->id}}" selected> {{$c->nombre}} </option>
            @else
                <option value="{{$c->id}}"> {{$c->nombre}} </option>
            @endif
        @else
            <option value="{{$c->id}}"> {{$c->nombre}} </option>
        @endif
     @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-outline-success">Ir</button>
  
</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Autor</th>
      <th scope="col">Categoría</th>
      <th scope="col">Fecha Publicación</th>
      <th scope="col">Usuario</th>
      <th scope="col">Disponible</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>

  @foreach($libros as $libro)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $libro->nombre }}</td>
      <td>{{ $libro->autor }}</td>
      <td>{{ $libro->categoria_id }}</td>
      <td>{{ $libro->fecha_pub }}</td>
      <td>{{ $libro->usuario }}</td>
      <td>
      @if( $libro->disponible == 1 ) 
       Si
      @else
        No
      @endif
     </td>
     <td> 
     <a class="btn btn-outline-info" href="{{ url( '/libros/'.$libro->id.'/edit' ) }}" role="button"> Editar </a> 

  
     <form method="post" action=" {{ url( '/libros/'.$libro->id ) }} ">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Está seguro de eliminar el registro?'); "> Borrar </button>
                </form>
      </td>
    </tr>
   @endforeach
  </tbody>

  
</table>

<div class="text-center">
<a class="btn btn-primary" href=" {{ url( 'libros/create' ) }} " role="button">Nuevo</a>
</div>


@endsection