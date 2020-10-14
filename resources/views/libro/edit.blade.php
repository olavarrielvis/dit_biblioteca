@extends('welcome');


@section("contenido1")

<form action=" {{ url( '/libros/'.$libro->id ) }} " method="post" enctype="multipart/form-data">
<!-- Nos dirigimos al metodo Update -->
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('libro.form',['modo'=>'editar'])

</form>

@endsection