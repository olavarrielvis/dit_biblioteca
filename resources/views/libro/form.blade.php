
@section("contenido1")
<div class="form-group">
    <label for="nombre"> {{'Nombre'}} </label>
    <input class="form-control" type="text" name="nombre" id="nombre" value=" {{ isset( $libro->nombre ) ? $libro->nombre : '' }}  ">
</div>

<div class="form-group">
    <label for="autor"> Autor </label>
    <input class="form-control" type="text" name="autor" id="autor" value=" {{ isset( $libro->autor ) ? $libro->autor : '' }}  ">
</div>

<div class="form-group">
    <label for="categoria_id"> {{'Categoría'}} </label>
    <select class="form-control" id="categoria_id" name="categoria_id">
      @foreach($categorias as $c)
        @if( isset($libro->categoria_id ) )
            @if( $libro->categoria_id == $c->id )
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

<div class="form-group">
    <label for="fecha_pub"> Fecha</label>
    <div class="input-group date eof-date">
        <input type="text" class="form-control" name="fecha_pub" id="fecha_pub" value=" {{ isset( $libro->fecha_pub ) ? $libro->fecha_pub : '' }} " >
        <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
    </div>
</div>

<div class="form-group">
    <label for="usuario"> {{'Usuario'}} </label>
    <input class="form-control" type="text" name="usuario" id="usuario" value=" {{ isset( $libro->usuario ) ? $libro->usuario : '' }}  ">
</div>

<div class="form-group">
    <label for="disponible"> {{'Disponible'}} </label>
    <select class="form-control" id="disponible" name="disponible">
      <option value="1"> Sí </option>
      <option value="0"> No </option>
    </select>
</div>






<a class="btn btn-outline-success" href="{{ url( 'libros' ) }}" role="button">Regresar</a>
<input class="btn btn-primary" type="submit" value="{{ $modo =='crear' ? 'Agregar' : 'Modificar' }}">

@endsection