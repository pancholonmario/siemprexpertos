@extends('layouts.categoriaplantilla')


@section('headerbody')
<header class="bg-primary text-white" style="background-image: url('siemprexpertos/nova/eventos/images/eventoshome.jpg'); background-size: cover;">
  <div class="container text-center">
    <h1>EVENTOS</h1>
    <hr/>
    <p class="lead">Dj, Fotógrafos, servico de Catering, animadores infantiles y más..</p>

  </div>
</header>
@stop

@section('imagencategoria')
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto">

          <a href="{{ url('/iniciarsesion') }}">Regresar el inicio</a>

          <hr align="left"/>
          <p>Filtro Eventos</p>
          <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Lista de Servicios Disponibles:  <i class="fa fa-search" style="font-size:20px"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ url('/eventos/alquilereventos') }}">Alquiler para Eventos</a>
              <a class="dropdown-item" href="#">Animadores Infantiles</a>
              <a class="dropdown-item" href="#">Dj</a>
              <a class="dropdown-item" href="#">Fotógrafo</a>
              <a class="dropdown-item" href="#">Meseros</a>
              <a class="dropdown-item" href="#">Organización Eventos</a>
              <a class="dropdown-item" href="#">Servicio de Catering</a>
              <a class="dropdown-item" href="#">Servicio de Limusina</a>
              <div class="dropdown-divider"></div>

            </div>
          </div> <hr align="left"/> <br>


        <div align="center">
            <a href="{{ url('/eventos/alquilereventos') }}"> <img class="todo" src="{{asset('siemprexpertos/nova/eventos/images/alquiler.png')}}" width="460" height="345" VSPACE="3"></a>
              <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/eventos/images/animador.png')}}" width="460" height="345" VSPACE="3"> </a>
              </div>

                <div align="center">
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/eventos/images/dj.png')}}" width="460" height="345" VSPACE="3"> </a>
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/eventos/images/fotografo.png')}}" width="460" height="345" VSPACE="3"> </a>
                  </div>

                  <div align="center">
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/eventos/images/meseros.png')}}" width="460" height="345" VSPACE="3"> </a>
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/eventos/images/organizacion.png')}}" width="460" height="345" VSPACE="3"> </a>
                  </div>

                  <div align="center">
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/eventos/images/serviciocatering.png')}}" width="460" height="345" VSPACE="3"> </a>
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/eventos/images/serviciolimusina.png')}}" width="460" height="345" VSPACE="3"> </a>
                  </div>


      </div>
    </div>
  </div>
</section>
@stop

@section('solicitado')
<section id="services" class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto text-center">

        <h3 align="left">Búsquedas Más Populares Para Eventos:</h3><br><br>


        <div class="row">



          <div class="col-sm-4" align="left"><br>
          <a href="#"> <h5>- Dj</h5></a> <br><br>
          <a href="#"> <h5>- Fotógrafo</h5></a> <br><br>
          <a href="#"> <h5>- Animadores Infantiles</h5></a> <br><br>
          <a href="#"> <h5>- Servicio de Catering</h5></a>
            </div>
          <div class="col-sm-8"> <img src="{{asset('siemprexpertos/nova/eventos/images/eventosimportantes.png')}}" width="460" height="375" alt=""> </div>
        </div><br><br>
<hr/>



        <br><br><br><br><br><br>
        <p class="lead" align="center">Encuentra nuestros mejores expertos de eventos <i class="fa fa-sign-in" style="font-size:24px"></i> Contáctalos gratis</p><br><br><br>
        <h3 align = "center">Si deseas trabajar con nosotros y buscas trabajo por horas entonces..</h3>

      <a class="btn btn-primary btn-lg" href="{{ url('/iniciarsesion') }}" role="button">Registrate</a>
      </div>
    </div>
  </div>
</section>
@stop


@section('modalubicacion')

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:rgb(49, 136, 217);">
            <h3 class="modal-title" id="exampleModalLabel" style="color:#edf2f6";>ALQUILER PARA EVENTOS</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label class="control-label">En que lugar Necesitas:</label><br>

            <select id="menu" class="form-control">
            <option value="" >Eliga un lugar</option>
            <option value="{{ url('/eventos/alquilereventos') }}">Quito</option>
            <option value="http://www.youtube.com/">Guayaquil</option>
            <option value="http://www.pinterest.com/">Pinteres</option>
            </select>
            </div>
          </div>
          <div class="modal-footer">

            <button id="go" class="btn btn-success" onclick="gotosite()">BUSCAR</button>


            <script type="text/javascript">
            function gotosite() {
        window.location = document.getElementById("menu").value; // JQuery:  $("#menu").val();
        }
            </script>




          </div>
        </div>
      </div>
    </div>


<!-- Modal terminar -->
@stop
