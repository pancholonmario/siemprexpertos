@extends('layouts.categoriaplantilla')


@section('headerbody')
<header class="bg-primary text-white" style="background-image: url('siemprexpertos/nova/bienestar/bienestarhome.jpg'); background-size: cover;">
    <div class="container text-center">
      <h1>BIENESTAR</h1>
      <hr/>
      <p class="lead">Cuidado de Mascotas - Nutricionista - Peluqueria y Maquillaje y más..</p>
    </div>
  </header>
@stop

@section('imagencategoria')

<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto">

        <a href="/">Regresar al inicio</a>

      <hr align="left"/>
      <p>Filtro Bienestar</p>
      <div class="btn-group">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lista de Servicios Disponibles:  <i class="fa fa-search" style="font-size:20px"></i>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Cuidado de Ancianos</a>
          <a class="dropdown-item" href="#">Entrenador Personal</a>
          <a class="dropdown-item" href="#">Fisioterapia</a>
          <a class="dropdown-item" href="#">Cuidado de Mascotas</a>
          <a class="dropdown-item" href="#">Cuidado de Niños</a>
          <a class="dropdown-item" href="#">Peluqería y Maquillaje</a>
          <a class="dropdown-item" href="#">Psicólogo</a>
          <a class="dropdown-item" href="#">Instructor de Yoga</a>
          <a class="dropdown-item" href="#">Hospedaje de mascotas</a>
          <a class="dropdown-item" href="#">Nutricionista</a>
          <a class="dropdown-item" href="#">Tatto</a>

          <div class="dropdown-divider"></div>

        </div>
      </div> <hr align="left"/> <br>

        <div align="center">
            <a href="#requestform" data-toggle="modal" data-target="#requestform"> <img class="todo" src="{{asset('siemprexpertos/nova/bienestar/ancianos.png')}}" width="460" height="345" VSPACE="3"> </a>
              <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/bienestar/entrenadorpersonal.png')}}" width="460" height="345" VSPACE="3"> </a>
              </div>

                <div align="center">
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/bienestar/fisioterapia.png')}}" width="460" height="345" VSPACE="3"> </a>
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/bienestar/mascotas.png')}}" width="460" height="345" VSPACE="3"> </a>
                  </div>

                  <div align="center">
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/bienestar/ninos.png')}}" width="460" height="345" VSPACE="3"> </a>
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/bienestar/peluqueria.png')}}" width="460" height="345" VSPACE="3"> </a>
                  </div>

                  <div align="center">
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/bienestar/psicologo.png')}}" width="460" height="345" VSPACE="3"> </a>
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/bienestar/yoga.png')}}" width="460" height="345" VSPACE="3"> </a>
                  </div>

                  <div align="center">
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/bienestar/hospedajemascotas.png')}}" width="460" height="345" VSPACE="3"> </a>
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/bienestar/nutricionista.png')}}" width="460" height="345" VSPACE="3"> </a>
                  </div>

                  <div align="center">
                    <a href="#popup5" data-toggle="modal" data-target="#popup5"> <img class="todo" src="{{asset('siemprexpertos/nova/bienestar/tattoo.png')}}" width="460" height="345" VSPACE="3"> </a>

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

        <h3 align="left">Búsquedas Más Populares Para Bienestar:</h3><br>
        <ul>

<li type="disc" align="left">Cuidado de Mascotas</li>
<li type="disc" align="left">Cuidade de Ancianos</li>
<li type="disc" align="left">Peluquería y Maquillaje</li>

</ul>
        <br><br><br><br><br><br>
        <p class="lead" align="center">Encuentra nuestros mejores expertos de bienestar | contáctalos | gratis</p><br><br><br>
        <h3 align = "center">Si deseas trabajar con nosotros y buscas trabajo por horas entonces..</h3>

      <a class="btn btn-primary btn-lg" href="{{ url('/iniciarsesion') }}" role="button">Registrate</a>
      </div>
    </div>
  </div>
</section>
@stop



@section('modalubicacion')
<form class="form-horizontal" action="#step-2" method="post" id="validateForm">
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
              <label class="control-label">En que lugar Necesitas:</label>
              <select name="role" class="form-control" >
                <option value=" " >Selecciona una Ciudad</option>
                <option>Quito</option>
                <option>Guayaquil</option>
                <option>Cuenca</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">

            <button type="submit" class="btn btn-success" style="margin-left:auto;margin-right:auto;display:block;">BUSCAR</button>



          </div>
        </div>
      </div>
    </div>

</form>
<!-- Modal terminar -->
@stop
