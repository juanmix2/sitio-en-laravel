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
        <h1 class="h2">Administrar instructor</h1>
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
       <!--boton agregar cliente-->
       <div class="row">
        <a href="{{ url('/agregarinstructor') }}" class="btn btn-outline-success col-2">
          <span data-feather="file-text"></span>
          Agregar instructor
        </a>
         <!--vista lista  de -->
         <hr>
         <table class="table table-striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Cedula</th>
              <th>Teléfono</th>
              <th>Dirección</th>
              <th>Credenciales</th>
              <th> Clave Instructor </th>
              </tr>
              </thead>
               <tbody>
               @foreach($instructors as $i)
               <tr>
              <td>{{$i->nombre}}</td>
              <td>{{$i->cedula}}</td>
              <td>{{$i->telefono}}</td>
              <td>{{$i->direccion}}</td>
              <td>{{$i->credenciales}}</td>
              <td>{{$i->id}} </td>

    <td>
              <div class="btn-group">
                <a href="{{url('editarinstructor/'.$i->id.'/edit')}}" class="btn btn-outline-success">
                  Editar</a>
                  <form method="post" action="{{ url('/borrarinstructor/'.$i->id) }}">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button class="btn btn-outline-success" type="submit" onclick="return confirm('Borrar datos de?\n{{$i->nombre}}');"> 
    Borrar
  </button></td></tr>
    </form>                 

      </div>
    </td>
  </tr>
  @endforeach
  {{$instructors->links()}}<!--navegadores-->
    </tbody>
    </table>

      </div>

    </main>
      </div>
    
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

@endsection
