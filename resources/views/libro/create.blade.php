@extends('welcome');


@section("contenido1")


<form action=" {{ url('/libros') }} " method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('libro.form',['modo'=>'crear'])

</form> 

@endsection