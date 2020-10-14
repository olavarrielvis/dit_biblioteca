
@section("contenido1")

<div class="form-group">
    <label for="nombre"> {{'Nombre'}} </label>
    <input class="form-control" type="text" name="nombre" id="nombre" value=" {{ isset( $categoria->nombre ) ? $categoria->nombre : '' }}  ">
</div>



<div class="form-group">
    <label for="descripcion"> Descripción </label>
    <input class="form-control" type="text" name="descripcion" id="descripcion" value=" {{ isset( $categoria->descripcion ) ? $categoria->descripcion : '' }}  ">
</div>



<input class="btn btn-primary" type="submit" value="{{ $modo =='crear' ? 'Agregar' : 'Modificar' }}">
<a class="btn btn-primary" href="{{ url( 'categorias' ) }}" role="button">Regresar</a>


@endsection