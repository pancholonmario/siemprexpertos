@extends('layouts.categoriaplantilla')


@section('solicitado')
<section id="services" class="bg-light">
  <div class="container">
    <h2>Profesionales como Funciona</h2>
    <hr/ align="left"><br><br><br>
    <div class="row" style="background-image: url('/siemprexpertos/images/pro7.png');">


<!-- style="border: ridge #6192e4 1px;"-->
        <div class="col-lg-9 mx-auto"><br>
        <h2>Pasos:</h2><br>
        <h3>Paso 1: REGISTRO</h3>
      <img src="http://aeeh.es/wp-content/uploads/2013/08/form_icon_256031.png" class="img-rounded" alt="Cinque Terre" width="80" height="80">

        <br><br>
        <p class="lead">Registra tus datos y completa un formulario indicando tu habilidad y experiencia.</p>
      </div><br><br>


      <div class="col-lg-9 mx-auto" ><br>


    </div>

      <div class="col-lg-9 mx-auto"><br>
      <h3>Paso 2: VERIFICACIÓN Y SELECCIÓN</h3>
      <img src="https://image.flaticon.com/icons/png/512/35/35932.png" class="img-rounded" alt="Cinque Terre" width="80" height="80">
      <br><br>
      <p class="lead">En un tiempo de 48 horas nuestro personal verificará los datos y serás contactado para saber si cumples con todos nuestros requisitos.</p>
    </div>

    </div>
  </div>
</section>
@stop

@section('habilidades')
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">

          <h3>Siemprexpertos.com es una plataforma web que permite a profesionales generar mayores ingresos al prestar sus servicios</h3><br>
          <img class="img-fluid" src="{{asset('siemprexpertos/images/profesionalquitoacuerdo2.jpg')}}" width="460" height="345" alt=""><br><br><br><br>
          <h2>¿Listo para intentarlo?</h2>
            <a class="btn btn-primary btn-lg" href="{{ url('/iniciarsesion') }}" role="button">Registrate</a>

    </div>


    </div>
  </div>
</section>

@stop
