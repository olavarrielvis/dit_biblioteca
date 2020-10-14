
@extends('welcome');
@section("contenido1")
<form action=" {{ url('/categorias') }} " method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('categoria.form',['modo'=>'crear'])

</form>

@endsection