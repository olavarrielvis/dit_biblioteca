<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap4.5.3/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('datepicker/css/bootstrap-datepicker.min.css') }}">
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Biblioteca</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="{{ url( 'libros' ) }}">Libros</a>
      <a class="nav-item nav-link" href="{{ url( 'categorias' ) }}">Categorías</a>

    </div>
  </div>
</nav>
<div class="container mb-5 mt-5">

@yield('contenido1')
</div>



    <script src="{{ asset('bootstrap4.5.3/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap4.5.3/popper.js') }}"></script>
    <script src="{{ asset('bootstrap4.5.3/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/myscript.js') }}"></script>

</body>
</html>