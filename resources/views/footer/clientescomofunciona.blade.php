@extends('layouts.categoriaplantilla')


@section('solicitado')
<section id="services" class="bg-light">
  <div class="container">
    <h2>Encuentra un experto en tan solo 4 pasos</h2>
    <hr/ align="left"><br><br><br>
    <div class="row" style="background-image: url('/siemprexpertos/images/pro4.png');">


<!-- style="border: ridge #6192e4 1px;"-->
        <div class="col-lg-9 mx-auto"><br>
        <h2>Pasos:</h2><br>
        <h3>Paso 1: ELIGE UNA CATEGORÍA</h3>
      <img src="https://image.flaticon.com/icons/png/512/70/70376.png" class="img-rounded" alt="Cinque Terre" width="80" height="80">

        <br><br>
        <p class="lead">Selecciona una de nuestras categorías disponibles</p>
      </div><br><br>


      <div class="col-lg-9 mx-auto" ><br>


    </div>

      <div class="col-lg-9 mx-auto"><br>
      <h3>Paso 2: SELECCIONA UN SERVICIO</h3>
      <img src="https://www.iberogen.es/content/uploads/2014/05/formulario.png" class="img-rounded" alt="Cinque Terre" width="80" height="80">
      <br><br>
      <p class="lead">Encuentra desde un dj hasta un arquitecto.</p>
    </div>

    <div class="col-lg-9 mx-auto" ><br>


  </div>

    <div class="col-lg-9 mx-auto"><br>
    <h3>Paso 3: ELIGE UN EXPERTO</h3>
    <img src="https://image.flaticon.com/icons/png/512/5/5176.png" class="img-rounded" alt="Cinque Terre" width="80" height="80">
    <br><br>
    <p class="lead">Todos nuestros expertos han pasado por un proceso de selección.</p>
  </div>

  <div class="col-lg-9 mx-auto" ><br>


</div>

  <div class="col-lg-9 mx-auto"><br>
  <h3>Paso 4: PONTE EN CONTACTO</h3>
  <img src="https://cdn.icon-icons.com/icons2/1103/PNG/512/handshake_78914.png" class="img-rounded" alt="Cinque Terre" width="80" height="80">
  <br><br>
  <p class="lead">Contacta a un profesional de manera gratuita y rápida.</p>
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

          <h3>Siemprexpertos.com te ayuda a conseguir profesionales de manera gratuita visita nuestras categorias disponibles</h3><br>
          <img src="{{asset('siemprexpertos/images/profesionalquitoacuerdo3.jpg')}}" width="460" height="345" alt=""><br><br><br><br>

            <h3>Encuentra el servicio que necesitas</h3>
            <select style="width:350px" id="nameid3" onchange="if (this.value) window.location.href=this.value">
            <option></option>
            @foreach($data as $tu)
              <option value="{{$tu->url}}">{{$tu->name}}</option>
            @endforeach
          </select>
          <br><br><br><br><br><br>


          <h2>Si buscas trabajo por horas entonces..</h2>
            <a class="btn btn-primary btn-lg" href="{{ url('/iniciarsesion') }}" role="button">Registrate como profesional</a>

    </div>

    </div>
  </div>
</section>

@stop
