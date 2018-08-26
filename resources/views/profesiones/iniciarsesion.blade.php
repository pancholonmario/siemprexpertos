@extends('layouts.categoriaplantilla')


@section('headerbody')
<!-- /.tener cuenta header -->

@stop

@section('imagencategoria')
<section>
<div class="container">

  <h2>
    Quieres Formar Parte de Nuestra Plataforma

</h2> <hr align="left"/> <br><br><br>


<div class="row">
  <h4 align="center">Estamos en la búsqueda de Profesionales y expertos</h4><br><br><br><br>
  <div class="col-md-12" align="center">
    <h5>Cuéntanos cual es tu habilidad o profesión.. </h5><br><br>
    </div>


  <div class="col-md-12" align="center">
    <h5>Contáctanos y envíanos tu hoja de vida:  <a href="mailto:info@siemprexpertos.com">info@siemprexpertos.com</a></h5><br><br>
    <a href="mailto:info@siemprexpertos.com"> <img src="http://emunah.co/wp-content/uploads/2016/07/portada_icon_cv1.png" alt=""></a><br><br>
      <a href="/">Regresar al inicio</a><br>

  </div>



</div>

<!--
<div class="row">
    <button class="btn btn-primary filter-button" data-filter="all">Todos</button><p>&nbsp;&nbsp;</p>
    <button class="btn btn-primary filter-button" data-filter="quito">Norte</button><p>&nbsp;</p>
    <button class="btn btn-primary filter-button" data-filter="guayaquil">Sur</button><p>&nbsp;</p>
    <button class="btn btn-primary filter-button" data-filter="joven">Valle (chillos-tumbaco)</button>

</div>  <br><br>

<div class="row">


    <div class="col-lg-4 col-sm-6 portfolio-item filter quito">

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{asset('siemprexpertos/images/profesiones/eventos/dj/pancho3.png')}}" alt="Card image cap">
      <div class="card-body">
  <h5 class="card-title">Mario Astudillo</h5>
  <small class="text-muted">Quito</small>
  <p class="card-text">
    CI: 1719185710 <br>
    Contacto: 0998149185<br>
    Mail: panchoe6@gmail.com
  </p>
  <a href="#exampleModal11" data-toggle="modal" data-target="#exampleModal11" class="btn btn-primary">Leer Más..</a><br>



</div>
</div>
      </div>

      <div class="col-lg-4 col-sm-6 portfolio-item filter quito">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('siemprexpertos/images/profesiones/eventos/dj/pancho4.png')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Esteban González

          </h5>
          <small class="text-muted">Quito</small>
          <p class="card-text">
            CI: 1719185710<br>
            Contacto: 0998149185 <br>
            Mail: panchoe6@gmail.com
          </p>
          <a href="#" class="btn btn-primary">Leer Más..</a>
        </div>
      </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item filter guayaquil">
        <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('siemprexpertos/images/profesiones/eventos/dj/pancho5.png')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mauricio González

      </h5>
      <small class="text-muted">Guayaquil</small>
      <p class="card-text">
        CI: 1719185710 guayaquil <br>
        Contacto: 0998149185 <br>
        Mail: panchoe6@gmail.com
      </p>
      <a href="#" class="btn btn-primary">Leer Más..</a>
    </div>
  </div>
      </div>

      <div class="col-lg-4 col-sm-6 portfolio-item filter joven">
        <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('siemprexpertos/images/profesiones/eventos/dj/pancho6.png')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Ana María Rios

      </h5>
      <small class="text-muted">Joven</small>
      <p class="card-text">
        CI: 1719185710<br>
        Contacto: 0998149185 <br>
        Mail: panchoe6@gmail.com
      </p>
      <a href="#" class="btn btn-primary">Leer Más..</a>
    </div>
  </div>
      </div>


      //modal
      <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:rgb(49, 136, 217)">

              <h3 class="modal-title" id="exampleModalLabel" style="color:rgb(243, 240, 245)";>Mario Astudillo - Dj</h3>


              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
              <img src="{{asset('siemprexpertos/images/profesiones/eventos/dj/pancho3.png')}}" width="160" height="110" class="rounded float-right">
                <h5 style="background-color:rgb(214, 213, 205)">Datos Personales</h5>
                <hr align="left"/>
                <p>
                  Mario Astudillo Serrano <br>
                  Ciudad: Quito <br>
                  1719185710 <br>
                  Contacto: 0998149185 <br>
                  Mail: pajsjs@gmail.com <br>
                  Dirección: Santa Anita Maz 16 Casa 1 N12-138

                </p>
                <p align="right">Redes Sociales:
                  <a href="#" align="left" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-instagram"></a>
                </p>

                <h5 style="background-color:rgb(214, 213, 205)">Acerca de Mi:</h5>
                <hr align="left"/>

                <p>
                  soy un hombre responsable...<br>


                </p><br>



                  <h5 style="background-color:rgb(214, 213, 205)">Experiencia</h5>
                  <hr align="left"/>
                  <p>1.- | Municipio de Quito |</p>

                  <div class="col-md-9 col-md-offset-9">Activades Realizadas:</div>
                  <div class="col-md-6 col-md-offset-6">- tu eres ya ya no seas</div>
                  <div class="col-md-6 col-md-offset-6">- tu eres ya ya no seas</div>
                  <div class="col-md-6 col-md-offset-6">- tu eres ya ya no seas</div>
                  <div class="col-md-6 col-md-offset-6">________</div>

                  <p>2.- | Municipio de Quito |</p>

                  <div class="col-md-9 col-md-offset-9">Activades Realizadas:</div>
                  <div class="col-md-6 col-md-offset-6">- tu eres ya ya no seas</div>
                  <div class="col-md-6 col-md-offset-6">- tu eres ya ya no seas</div>
                  <div class="col-md-6 col-md-offset-6">- tu eres ya ya no seas</div>
                  <div class="col-md-6 col-md-offset-6">________</div><br>






                </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>

</div>

-->
</section>

@stop

@section('solicitado')
<!--
<section id="services" class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto text-center">

        <h3 align="left">Búsquedas Más Populares Para Bienestar:</h3><br>
        <ul>

<li type="disc" align="left">Cuidado de Mascotas</li>
<li type="disc" align="left">Cuidade de Ancianos</li>
<li type="disc" align="left">Peluquería y Maquillaje/li>

</ul>
        <br><br><br><br><br><br>
        <p class="lead" align="center">Encuentra nuestros mejores profesionales de bienestar | contáctalos | gratis</p><br><br><br>
        <h3 align = "center">Si deseas trabajar con nosotros y buscas trabajo por horas entonces..</h3>

      <a class="btn btn-primary btn-lg" href="#" role="button">Registrate</a>
      </div>
    </div>
  </div>
</section>
-->
@stop

@section('habilidades')
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto" align="center">
        <h4>Siemprexpertos.com es una plataforma web que permite a profesionales generar mayores ingresos al prestar sus servicios</h4><br><br>
        <center>
        <img class="img-fluid" src="https://cdn.filepicker.io/api/file/UVyFwZmnRuKEoswQDhpw" with="290" height="290" alt="">
      </center><br><br>

      <h3 align="center">Si buscas trabajo por horas entonces..</h3><br>

            <a align="center" href="https://m.me/1709636575998166"> <h5>Envíanos un mensaje en Facebook <i class="fa fa-facebook-f"></i></h5>
            </a><br>
            <h5>o tu</h5><br>
            <h5>CV a: <a href="mailto:info@siemprexpertos.com">info@siemprexpertos.com&nbsp;&nbsp;</a>  <i class="fa fa-sign-in" style="font-size:24px">  </i>&nbsp;&nbsp;Analizaremos tu perfil</h5>
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
