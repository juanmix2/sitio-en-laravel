@extends('layouts.app')

@section('content')
<div class="container">
  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    


<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
               <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido!') }}
                </div>
            </a>
          </li>
          <li class="nav item">
            <a class="nav-link" href="{{url('/client')}}">
              <!--cambiar icono por uno de usuarios-->
              <span data-feather="users"></span>
              Clientes
            </a>
          </li>
          <li class="nav item">
            <a class="nav-link" href="{{url('/instructor')}}">
              <!--cambiar icono por un pito-->
              <span data-feather=""></span>
              Instructores
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/course')}}">
              <!--cambiar icono por uno de... -->
              <span data-feather=""></span>
              Clases
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/subscription')}}">
              <!--cambiar icono por uno de subscripcion-->
              <span data-feather="bar-chart-2"></span>
              Subscripciones
            </a>
          </li>
        

        
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Actualizar clase</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <!--Enviar por mail-->
            <button type="button" class="btn btn-sm btn-outline-success">Enviar</button>
            <!--fin enviar por mail-->
            <!--reporte pdf-->
            <button type="button" class="btn btn-sm btn-outline-success">Reporte</button>
            <!--fin reporte pdf-->
          </div>
          <!--desloguearse-->
          <button type="button" >
            <!--cambiar icono por uno de home-->
            <span data-feather="calendar"></span>
            <div class="nav-item text-nowrap">
      <a  href="{{url('/home')}}">Inicio</a>
        </button>
        <!--find desloguearse-->
        </div>
      </div>

      <div class="my-4 w-100" id="myChart" width="900" height="380">
      <div class="row">
      <!--formulario agregar cliente-->
     
      <form action="{{url('/editarcourse/'.$course->id)}}" method="post">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <div class="mb-3">
      <label for="nombreyapellido" class="form-label">Nombre</label>
      <input name="nombre" type="text"value="{{$course->nombre}}" class="form-control" id="" aria-describedby="" required>
      </div>
      <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción</label>
      <input name="descripcion" type="text"value="{{$course->descripcion}}" class="form-control" id="" aria-describedby="" required>
      </div>
      <div class="mb-3">
      <label for="duracion" class="form-label">Lapso (dias)</label>
      <input name="lapso" type="number"value="{{$course->lapso}}" class="form-control" id="" aria-describedby="" required>
      </div>
      <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input name="precio" type="number"value="{{$course->precio}}" class="form-control" id="" aria-describedby="" required>
      </div>
      <div class="mb-3">
      <label for="clave" class="form-label">Clave instructor</label>
      <input name="instructorfk" type="id"value="{{$course->instructorfk}}" class="form-control" id="" aria-describedby="" required>
      </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
  </div>
</div>
    </main>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

@endsection
