<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Siemprexpertos.com</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('siemprexpertos/categorias/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('siemprexpertos/categorias/css/scrolling-nav.css')}}" rel="stylesheet">
    <style>
    img.todo {
        max-width: 100%;
        height: auto;
    }

    hr {
      height: 2px;
      background-color: rgb(244, 238, 237);
      width:10%;
    }

    footer {

    background: rgb(11, 11, 11);
    }

  a.tua{
  color:rgb(159, 162, 164);
  }

  h8.tuh{

  color:rgb(252, 251, 252);

  }

  </style>

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/inicio') }}"> <img src="{{asset('siemprexpertos/categorias/logo4.png')}}"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">¿NECESITAS UN SERVICIO?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">SOY PROFESIONAL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">AYUDA</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


  @yield('headerbody')
  @yield('imagencategoria')

@yield('solicitado')

@yield('habilidades')

@yield('modalubicacion')

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4">

  <!--Footer Links-->
  <div class="container text-center text-md-left">
      <div class="row">

          <!--First column-->
          <div class="col-md-3 mx-auto">
              <h8 class="text-capitalize mb-4 mt-3 font-weight-bold tuh">Compañia</h8>
              <ul class="list-unstyled"> <br>
                  <li>
                      <a href="#!" class="tua">Quienes Somos</a>
                  </li>
                  <li>
                      <a href="#!" class="tua">Valores Corporativos</a>
                  </li>
                  <li>
                      <a href="#!" class="tua">Términos y Condiciones</a>
                  </li>
                  <li>
                      <a href="#!" class="tua">Política y Privacidad</a>
                  </li>
              </ul>
          </div>
          <!--/.First column-->

          <hr class="clearfix w-100 d-md-none">

          <!--Second column-->
          <div class="col-md-3 mx-auto">
              <h8 class="text-capitalize mb-4 mt-3 font-weight-bold tuh">Clientes</h8>
              <ul class="list-unstyled"> <br>
                  <li>
                      <a href="#!" class="tua">¿Como Funciona?</a>
                  </li>
                  <li>
                      <a href="#!" class="tua">Seguridad</a>
                  </li>

              </ul>
          </div>
          <!--/.Second column-->

          <hr class="clearfix w-100 d-md-none">

          <!--Third column-->
          <div class="col-md-3 mx-auto">
              <h8 class="text-capitalize mb-4 mt-3 font-weight-bold tuh">Profesionales</h8>
              <ul class="list-unstyled"> <br>
                  <li>
                      <a href="#!" class="tua">¿Como Funciona?</a>
                  </li>

                  <li>
                      <a href="#!" class="tua">Inscríbete</a>
                  </li>
                  <li>
                      <a href="#!" class="tua">Planes/Pagos</a>
                  </li>
              </ul>
          </div>
          <!--/.Third column-->

          <hr class="clearfix w-100 d-md-none">

          <!--Fourth column-->
          <div class="col-md-3 mx-auto">
              <h8 class="text-capitalize mb-4 mt-3 font-weight-bold tuh">Ayuda</h8>
              <ul class="list-unstyled"><br>
                  <li>
                      <a href="#!" class="tua">Contacto</a>
                  </li>
                  <li>
                      <a href="#!" class="tua">Sugerencias</a>
                  </li>

              </ul>
          </div>
          <!--/.Fourth column-->
      </div>
  </div>
  <!--/.Footer Links-->

  <hr>

  <!--Call to action-->
  <div class="text-center py-3">
      <ul class="list-unstyled list-inline mb-0">
          <li class="list-inline-item">
              <h5 style="color:rgb(252, 251, 252)"; class="mb-1">Forma parte de nuestra red de Profesionales de Siemprexpertos.com!</h5>
          </li>
          <li class="list-inline-item">
              <a href="#!" class="btn btn-danger btn-rounded">Registratse!</a>
          </li>
      </ul>
  </div>

  <!--Copyright-->
  <div style="color:rgb(252, 251, 252)"; class="footer-copyright py-3 text-center">
      © Copyright:
      <a style="color:rgb(252, 251, 252)";>Siemprexpertos</a>
  </div>
  <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- Bootstrap core JavaScript -->
<script src="{{asset('siemprexpertos/categorias/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('siemprexpertos/categorias/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('siemprexpertos/categorias/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom JavaScript for this theme -->
<script src="{{asset('siemprexpertos/categorias/js/scrolling-nav.js')}}"></script>


  </body>

</html>
