<!doctype html>

<html class="no-js" lang="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="description" content="Siemprexpertos es una plataforma web que te ayuda a promocionar tu negocio, tienes una habilidad y eres experto en alguna profesión y buscas trabajo extra entonces inscribete. Consigue más clientes de manera gratuita. Tienes experiencia en: Asesoría, Brindar Cursos, Cuidado en el Bienestar, organizar eventos, cuidado en el hogar, servico técnico.">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0" />
  <meta name="author" content="Equipo de Siemprexpertos: Mario Francisco Astudillo, Esteban Gonzales, Mauricio Gonzalez">
<title>Siemprexpertos.com | Servicios Profesionales, tienes una habilidad y eres experto en alguna profesión o actividad, necesitas ganar dinero extra y buscas trabajo. Inscríbete. Somos una plataforma web que permite a profesionales generar mayores ingresos al prestar sus servicios.</title>
<link rel="stylesheet" href="{{ asset('siemprexpertos/css/bootstrap.min.css')}} ">
<link rel="stylesheet" href="{{ asset('siemprexpertos/css/flexslider.css')}} ">
<link rel="stylesheet" href="{{ asset('siemprexpertos/css/jquery.fancybox.css')}} ">
<link rel="stylesheet" href="{{ asset('siemprexpertos/css/main.css')}} ">
<link rel="stylesheet" href="{{ asset('siemprexpertos/css/responsive.css')}} ">
<link rel="stylesheet" href="{{ asset('siemprexpertos/css/animate.min.css')}} ">
<link rel="stylesheet" href="{{ asset('siemprexpertos/css/font-icon.css')}} ">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- link librerias modal -->
<link rel="stylesheet" href="{{asset('siemprexpertos/modal/plugins/bootstrap/css/bootstrap.css')}}">
<!-- link librerias modal -->

<!-- imagenes categorias responsive -->
<style>
img.todo {
    max-width: 100%;
    height: auto;
}

hr {
  height: 2px;
  background-color: rgb(49, 136, 217);
  width:10%;
}

</style>
<!-- imagenes categorias responsive-->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

<link rel="shortcut icon" href="{{ url('favicon.png') }}">

</head>

<body>




<!-- header section -->
<section class="banner" role="banner">
  <!--header navigation -->
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="{{ url('/') }}"><img class="img-responsive" src="{{asset('siemprexpertos/categorias/logo4.png')}}" width="225" height="10" alt="Los mejores profesionales en Quito"></a>

      <nav class="navigation" role="navigation">
        <ul class="primary-nav">

          <li><a href="#services">¿Necesitas un servicio?</a></li>
          <li><a href="{{ url('/iniciarsesion') }}">Iniciar Sesión <span style="font-size:9pt;">(profesionales)</span> </a></li>


          <li><a href="#"> </a></li>
          <li><a href="#"></a></li>
        </ul>
      </nav>

      <a href="#" class="nav-toggle">Menu<span></span></a> </div>



  </header>
  <!--header navigation -->
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <div class="row" style="background-color:rgba(182, 115, 57, 0.55);">
            <h2 style="font-size: 35px; color:white; text-align: center; opacity: 4.9;"><b>¿NECESITAS UN SERVICIO PROFESIONAL?</b></h2>
            <p style="font-size: 18px;"><b>Dj, Fotógrafos, Plomeros y mucho más..GRATIS</b></p>


        </div><br>

        <div class="col-sm-1 text-right">

        </div>

          <div class="col-sm-9">

            <select style="width: 100%; height: 50px;" aria-hidden="true" id="nameid" onchange="if (this.value) window.location.href=this.value">
              <option></option>
              @foreach($data as $tu)
              <option value="{{$tu->url}}">{{$tu->name}}</option>
              @endforeach
            </select>

          </div>

          <div class="col-sm-1">

          </div>
        <br>



  <!--         <nav role="navigation"> <a href="#services" class="banner-btn"><img src="images/down-arrow.png" alt=""></a></nav>   -->
      </div>
      <!-- banner text -->
    </div>
  </div>
</section>
<!-- header section -->


<br><br><br><br>
<section>
  <div class="container">
    <h2>Consigue el experto y profesional adecuado a tus necesidades</h2><br>
    <p>Sigue estos sencillos pasos:</p><br><br>

    <div class="col-md-4 col-xs-12 fila">


    <h4>Paso 1:</h4>
    <h5>ELIGE UNA CATEGORÍA</h5>

      <img src="{{asset('siemprexpertos/texturas/lupaprofesionales.png')}}" class="img-rounded" alt="Cinque Terre" width="110" height="110">
        <p>Selecciona una de nuestras categorías disponibles</p>
    </div>

<div class="col-md-4 col-xs-12 fila">


    <h4>Paso 2:</h4>
    <h5>SELECCIONA UN SERVICIO</h5>
      <img src="{{asset('siemprexpertos/texturas/formularioprofesionales.png')}}" class="img-rounded" alt="Cinque Terre" width="110" height="110">
      <p>Encuentra desde un dj hasta un arquitecto y mucho más</p>
    </div>

    <div class="col-md-4 col-xs-12 fila">


        <h4>Paso 3:</h4>
        <h5>ELIGE UN EXPERTO y PONTE EN CONTACTO</h5>

        <img src="{{asset('siemprexpertos/texturas/buscarprofesionales.png')}}" class="img-rounded" alt="Cinque Terre" width="100" height="100">
        <img src="{{asset('siemprexpertos/texturas/propuestadetrabajo.png')}}" class="img-rounded" alt="Cinque Terre" width="110" height="110">
        <p>Todos nuestros expertos han pasado por un proceso de selección, contacta a un profesional de manera gratuita y rápida.</p>
        </div>


  </div>
</section>

<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
    <h1 align="center">CATEGORÍAS</h1>
    <hr/>
    <p align="center">Selecciona la categoría del servcio que necesitas</p>

    <div class="row">

      <div class="col-md-6" align="center">
        <a href="{{ url('/asesoria') }}">	<img src="{{asset('siemprexpertos/images/categorias/asesoria-quito.png')}}"  class="todo" width="460" height="345" VSPACE="3" alt="Servicios Profesionales para asesoría en quito"><p><strong title="Categoría de Asesoría">ASESORÍA</strong> </p></a>

          <p>Asesor contable, Diseñador gráfico, Asesor legal y más..</p>
        <a href="{{ url('/bienestar') }}">	<img src="{{asset('siemprexpertos/images/categorias/bienestar-quito.png')}}"  class="todo" width="460" height="345" VSPACE="3" alt="Servicios Profesionales para bienestar en quito">  <p><strong>BIENESTAR</strong> </p></a>

          <p>Cuidado de Mascotas, Nutricionista, Peluquería y maquillaje y más..</p>

      </div>

      <div class="col-md-6" align="center">
        <a href="{{ url('/cursos') }}"> <img src="{{asset('siemprexpertos/images/categorias/cursos-quito.png')}}" class="todo" width="460" height="345" VSPACE="3" alt="Servicios Profesionales para cursos en quito">   <p><strong>CURSOS</strong> </p></a>

          <p>Clases de guitarra, Clases de inglés, Particulares y más..</p>
        <a href="{{ url('/eventos') }}"> <img src="{{asset('siemprexpertos/images/categorias/eventos-quito.png')}}" class="todo" width="460" height="345" VSPACE="3" alt="Servicios Profesionales para eventos en quito">  <p><strong>EVENTOS</strong> </p> </a>

          <p>DJ, Fotógrafos, Servicio de Catering, Animadores infantiles y más..</p>

        </div>



      <div class="col-md-6" align="center">
        <a href="{{ url('/hogar') }}"> <img src="{{asset('siemprexpertos/images/categorias/hogar-quito.png')}}" class="todo" width="460" height="345" VSPACE="3" alt="Servicios Profesionales para hogar en quito"><p><strong>HOGAR</strong> </p> </a>

          <p>Plomero, Jardinero, Lavandería a domicilio y más..</p>

      </div>

        <div class="col-md-6" align="center">
          <a href="{{ url('/serviciotecnico') }}"> <img src="{{asset('siemprexpertos/images/categorias/serviciotecnico-quito.png')}}" class="todo" width="460" height="345" VSPACE="3" alt="Servicios Profesionales para servicio tecnico en quito"><p><strong>SERVICIO TÉCNICO</strong> </p> </a>

            <p>Reparación de ordenadores, Servicio técnico y más..</p>
        </div>



    </div>
  </div>
</section>
<!-- services section -->

<br><br>

<section id="teams" class="section teams" style="background-image: url('siemprexpertos/images/servicios-profesionales-quito.jpg');  background-attachment: fixed;">

</section>

<section id="teams" class="section teams">
  <div class="container">
    <div class="row">


      <div class="col-lg-12 mx-auto text-center">
    <h2 align="center">

    Si brindas un servicio profesional registrate en Siemprexpertos.com y consigue más clientes de manera gratuita.

    </h2><br><br>

      <h3 align="center">Servicios Más Solicitados</h3> <hr/>
      <center>
          <img src="{{asset('siemprexpertos/texturas/acuerdo.png')}}" alt="" class="todo" width="160" height="145"><br><br><br>
        </center>
      </div>







          <div class="col-sm-3" align="center">
            <ul>
              <li>Dj</li><br>
              <li>Fotógrafo</li><br>
              <li>Asesor de Imagen</li>
            </ul>

            </div>
            <div class="col-sm-3" align="center">
              <ul>
                <li>Profesor de Inglés</li><br>
                <li>Veterinario</li><br>
                <li>Hospedaje de mascotas</li>
              </ul>

              </div>
              <div class="col-sm-3" align="center">
                <ul>
                  <li>Peluqueria y Maquillaje</li><br>
                  <li>Nutricionista</li><br>
                  <li>Servicio de Catering</li>
                </ul>

                </div>
                <div class="col-sm-3" align="center">
                  <ul>
                    <li>Animadores infantiles</li><br>
                    <li>Diseñador Gráfico</li><br>
                    <li>Asesor Legal</li>
                  </ul>

                  </div>

    </div>
  </div>
</section>



<!-- video section mirar que pasa
<section id="no" style="background-color: #e9eaed">
    <div class="container">
    <div class="row">
      <div class="col-sm-6" align="left">
          <h1>Mira</h1><br>
          <h2 align="center">Como funciona siemprexpertos.com</h2><br>
            <p align="center"> Te demostramos en sencillos pasos que hacer para conseguir lo que necesitas</p>

        </div>



          <div class="col-sm-6" align="left">
        <a href="#videoModal" data-toggle="modal" data-target="#videoModal">  <img src="images/video1.png" class="todo"></a>
          </div>


  <div class="modal fade" id="videoModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Learn how to make this app!</h4>
        </div>
        <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mcGBVy3-W4s"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>


    </div>
</div>
</section>

video mirar que pasa -->


<!-- Testimonials section Gracias a Siemprexpertos obtuve mas pacientes, Pude realizar el evento de mi empresa utilizando esta plataforma ,
Desde que me inscribí a la plataforma he obtenido más proyectos, Me parece increíble haber encontrado el hospedaje ideal para mi mascota  -->
<section id="testimonials" class="section testimonials no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="flexslider">
        <ul class="slides">
          <h1>Equipo de trabajo</h1>
        <hr/>
          <li>
            <div class="col-md-12">
              <blockquote>
              <h1>"Siemprexpertos es un nuevo canal de ventas para promocionar tu negocio y de manera gratuita"</h1>
                <p style="color:#878285";>Mauricio Gonzalez, Ing. Comercial</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"La plataforma de siemprexpertos es una tecnología que te ayudará a conseguir tus necesidades de manera rápida y efectiva." </h1>
                <p style="color:#878285";>Mario Astudillo, Ing. Sistemas y Computación</p>
              </blockquote>
            </div>
          </li>

          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Encontrar el experto que necesito es tan fácil, solo necesito ingresar a: siemprexpertos.com" </h1>
                <p style="color:#878285";>Esteban Gonzalez, Ing. Comercial</p>
              </blockquote>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials section -->
<!-- Get a quote section -->
<section id="contact" class="section quote">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Forma parte de nuestra red de Profesionales de Siemprexpertos.com!</h3>
      <a href="{{ url('/iniciarsesion') }}" class="btn btn-large" title="Registrate de manera gratuita">Registrarse</a> </div>
        <br><br>

        <div class="" style="text-align: center;">
          <a href="https://m.me/1709636575998166" align"center" target="_blank">Envíanos un mensaje en Facebook
          <i class="fa fa-facebook-f"></i></a>
        </div>


  </div>
</section>
<!-- Get a quote section -->






<!-- codigo para modales-->
<!-- modal: Compañia - Quienes Somos-->
<div class="modal  fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color:rgb(49, 136, 217);">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">cerrar</span></button>
            <h3 class="modal-title" id="label" style="color:#edf2f6";><strong>Quienes Somos</strong></h3>
          </div>
          <div class="modal-body">
            <p style="text-align: center">Descripción</p>
            <p style="text-align: justify">
              <h3>Misión</h3>
              Somos una plataforma de búsqueda de servicios profesionales gratuita que conecta clientes que requieren un servicio específico y profesionales dispuestos a brindarlo.
              <h3>Visión</h3>
              Consolidarnos en el mercado nacional como la primera plataforma de búsqueda gratuita de servicios profesionales, con proyección a nivel internacional.
            </p>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
<!-- modal: Compañia - Valores Corporativos-->
    <div class="modal  fade" id="popup2" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background-color:rgb(49, 136, 217);">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">cerrar</span></button>
                <h3 class="modal-title" id="label" style="color:#edf2f6";><strong>Valores Corporativos</strong></h3>
              </div>
              <div class="modal-body">
                <p style="text-align: center">Descripción</p>
                <p style="text-align: justify">
                COMPROMISO: con nuestros clientes brindándoles una solución eficaz y precisa a todos sus requerimientos.<br><br>
                RESPONSABILIDAD: con los usuarios y profesionales que forman parte de la plataforma, cumpliendo con nuestras políticas y procedimientos al momento de brindar el servicio.<br><br>
                TRANSPARENCIA: con nuestros usuarios y profesionales, que permitan tener crear una relación perdurable y de confianza.<br><br>
                CONFIANZA: a través de nuestro trabajo, entregando nuestro mayor esfuerzo para cumplir los objetivos planteados.<br>

              </p>
              </div>
              <div class="modal-footer">

              </div>
            </div>
          </div>
        </div>
<!-- modal: Compañia - Términos y Condiciones-->
<div class="modal  fade" id="popup3" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color:rgb(49, 136, 217);">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">cerrar</span></button>
            <h3 class="modal-title" id="label" style="color:#edf2f6";><strong>Términos y Condiciones</strong></h3>
          </div>
          <div class="modal-body">
            <p style="text-align: center">Descripción</p>
            <p style="text-align: justify">
              INFORMACIÓN RELEVANTE

              Es requisito necesario para la adquisición de los productos (servicios) que se ofrecen en este sitio, que lea y acepte los siguientes Términos y Condiciones que a continuación se redactan. El uso de nuestros servicios así como la compra de nuestros productos implicará que usted ha leído y aceptado los Términos y Condiciones de Uso en el presente documento. Todas los productos  que son ofrecidos por nuestro sitio web pudieran ser creadas, cobradas, enviadas o presentadas por una página web tercera y en tal caso estarían sujetas a sus propios Términos y Condiciones. En algunos casos, para adquirir un producto (un servicio), será necesario el registro por parte del usuario, con ingreso de datos personales fidedignos y definición de una contraseña.

              El usuario puede elegir y cambiar la clave para su acceso de administración de la cuenta en cualquier momento, en caso de que se haya registrado y que sea necesario para la compra de alguno de nuestros productos. www.siemprexpertos.com no asume la responsabilidad en caso de que entregue dicha clave a terceros.

              Todas las compras y transacciones que se lleven a cabo por medio de este sitio web, están sujetas a un proceso de confirmación y verificación, el cual podría incluir la verificación del stock y disponibilidad de producto, validación de la forma de pago, validación de la factura (en caso de existir) y el cumplimiento de las condiciones requeridas por el medio de pago seleccionado. En algunos casos puede que se requiera una verificación por medio de correo electrónico.

              Los precios de los productos ofrecidos en esta Tienda Online es válido solamente en las compras realizadas en este sitio web.

              LICENCIA

              SIEMPREXPERTOS.COM  a través de su sitio web concede una licencia para que los usuarios utilicen  los productos (servicios) que son vendidos en este sitio web de acuerdo a los Términos y Condiciones que se describen en este documento.

              USO NO AUTORIZADO

              En caso de que aplique (para venta de software, templetes, u otro producto de diseño y programación) usted no puede colocar uno de nuestros productos, modificado o sin modificar, en un CD, sitio web o ningún otro medio y ofrecerlos para la redistribución o la reventa de ningún tipo.



              PROPIEDAD

              Usted no puede declarar propiedad intelectual o exclusiva a ninguno de nuestros productos (servicios), modificado o sin modificar. Todos los productos son propiedad  de los proveedores del contenido. En caso de que no se especifique lo contrario, nuestros productos se proporcionan  sin ningún tipo de garantía, expresa o implícita. En ningún esta compañía será  responsables de ningún daño incluyendo, pero no limitado a, daños directos, indirectos, especiales, fortuitos o consecuentes u otras pérdidas resultantes del uso o de la imposibilidad de utilizar nuestros productos.

              POLÍTICA DE REEMBOLSO Y GARANTÍA

              En el caso de productos que sean  mercancías irrevocables no-tangibles, no realizamos reembolsos después de que se envíe el producto, usted tiene la responsabilidad de entender antes de comprarlo.  Le pedimos que lea cuidadosamente antes de comprarlo. Hacemos solamente excepciones con esta regla cuando la descripción no se ajusta al producto. Hay algunos productos que pudieran tener garantía y posibilidad de reembolso pero este será especificado al comprar el producto. En tales casos la garantía solo cubrirá fallas de fábrica y sólo se hará efectiva cuando el producto se haya usado correctamente. La garantía no cubre averías o daños ocasionados por uso indebido. Los términos de la garantía están asociados a fallas de fabricación y funcionamiento en condiciones normales de los productos y sólo se harán efectivos estos términos si el equipo ha sido usado correctamente. Esto incluye:

              – De acuerdo a las especificaciones técnicas indicadas para cada producto.
              – En condiciones ambientales acorde con las especificaciones indicadas por el fabricante.
              – En uso específico para la función con que fue diseñado de fábrica.
              – En condiciones de operación eléctricas acorde con las especificaciones y tolerancias indicadas.

              COMPROBACIÓN ANTIFRAUDE

              La compra del cliente puede ser aplazada para la comprobación antifraude. También puede ser suspendida por más tiempo para una investigación más rigurosa, para evitar transacciones fraudulentas.

              PRIVACIDAD

              Este sitio web www.siemprexpertos.com garantiza que la información personal que usted envía cuenta con la seguridad necesaria. Los datos ingresados por usuario o en el caso de requerir una validación de los pedidos no serán entregados a terceros, salvo que deba ser revelada en cumplimiento a una orden judicial o requerimientos legales.

              La suscripción a boletines de correos electrónicos publicitarios es voluntaria y podría ser seleccionada al momento de crear su cuenta.

              SIEMPREXPERTOS.COM reserva los derechos de cambiar o de modificar estos términos sin previo aviso.



          </p>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
<!-- modal: Compañia - Política y Privacidad-->

<div class="modal  fade" id="popup4" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color:rgb(49, 136, 217);">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">cerrar</span></button>
            <h3 class="modal-title" id="label" style="color:#edf2f6";><strong>Política y Privacidad</strong></h3>
          </div>
          <div class="modal-body">
            <p style="text-align: center">Descripción</p>
            <p style="text-align: justify">
              El presente Política de Privacidad establece los términos en que SIEMPREXPERTOS.COM usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.

              Información que es recogida

              Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,  información de contacto como  su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.

              Uso de la información recogida

              Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios.  Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.

              SIEMPREXPERTOS.COM está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.

              Cookies

              Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras visitas a una web recurrente. Otra función que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.

              Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente, fuente. Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.

              Enlaces a Terceros

              Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.

              Control de su información personal

              En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.  Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico.  En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.

              Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.

              SIEMPREXPERTOS.COM Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.

          </p>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

<!-- modal: Categorías - Bienestar y Salud-->
<div class="modal  fade" id="popup5" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color:rgb(49, 136, 217);">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">cerrar</span></button>
            <h3 class="modal-title" id="label" style="color:#edf2f6";><strong>Bienestar</strong></h3>
          </div>
          <div class="modal-body">
            <p style="text-align: center">¿Qúe Servicio Necesitas?</p>
            <p style="text-align: justify">
              <ul>
                <li><a href="http://modal12.dev">Maquillaje y Peluqueria</a></li>
                <li><a href="">Entrenador personal</a></li>
                <li><a href="#">Instructor de Yoga</a></li>
                <li><a href="#">Cuidado de niños (Empresas)</a></li>
                <li><a href="#">Fisioterapista</a></li>
                <li><a href="#">Cuidadores ancianos (Empresas)</a></li>
                <li><a href="#">Psicologo</a></li>
                <li><a href="#">Cuidado de Mascotas</a></li>



              </ul>
          </p>
          </div>


          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>



<!-- modal: Categorías - Limpieza y Hogar-->
<div class="modal  fade" id="popup7" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">cerrar</span></button>
            <h3 class="modal-title" id="label"><strong>Hogar</strong></h3>
          </div>
          <div class="modal-body">
            <p style="text-align: center">¿Qúe Servicio Necesitas?</p>
            <p style="text-align: justify">
              <ul>
                <li><a href="#">Limpieza hogar (Empresas)</a></li>
                <li><a href="#">Jardinero</a></li>
                <li><a href="#">Plomero</a></li>
                <li><a href="#">Lavaderia a domicilio</a></li>
                <li><a href="#">Control de plagas</a></li>
              </ul>
          </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

<!-- modal: Categorías - Asesoría y Freelance-->
<div class="modal  fade" id="popup8" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">cerrar</span></button>
            <h3 class="modal-title" id="label"><strong>Asesoría</strong></h3>
          </div>
          <div class="modal-body">
            <p style="text-align: center">¿Qúe Servicio Necesitas?</p>
            <p style="text-align: justify">
              <ul>
                <li><a href="#">Asesores legales</a></li>
                <li><a href="#">Fotógrafo Empresarial</a></li>
                <li><a href="#">Servicios contables</a></li>
                <li><a href="#">Servicos de seguridad privada (Empresa)</a></li>
                <li><a href="#">Diseñador gráfico</a></li>

              </ul>
          </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

<!-- modal: Categorías - Servicio Tecnico Informatico-->
<div class="modal  fade" id="popup9" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">cerrar</span></button>
            <h3 class="modal-title" id="label"><strong>Servicio Técnico</strong></h3>
          </div>
          <div class="modal-body">
            <p style="text-align: center">¿Qúe Servicio Necesitas?</p>
            <p style="text-align: justify">
              <ul>
                <li><a href="#">Reparación ordenadores</a></li>
                <li><a href="#">Reparación celulares y tablets</a></li>


              </ul>
          </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
<!-- modal: Categorías - Clases Particulares-->
<div class="modal  fade" id="popup10" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">cerrar</span></button>
            <h3 class="modal-title" id="label"><strong>Cursos</strong></h3>
          </div>
          <div class="modal-body">
            <p style="text-align: center">¿Qúe Servicio Necesitas?</p>
            <p style="text-align: justify">
              <ul>
                <li><a href="#">Primaria</a></li>
                <li><a href="#">Bachillerato</a></li>
                <li><a href="#">Clases de guitarra</a></li>
                <li><a href="#">Clases particulares inglés</a></li>
                <li><a href="#">Clases particulares francés</a></li>
                <li><a href="#">Clases particulares alemán</a></li>

              </ul>
          </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

<!-- modal: Categorías - Clases Idiomas-->
<div class="modal  fade" id="popup11" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">cerrar</span></button>
            <h3 class="modal-title" id="label"><strong>Clases Idiomas</strong></h3>
          </div>
          <div class="modal-body">
            <p style="text-align: center">¿Qúe Servicio Necesitas?</p>
            <p style="text-align: justify">
              <ul>
                <li><a href="#">Clases particulares ingles</a></li>
                <li><a href="#">Clases particulares francés</a></li>
                <li><a href="#">Clases particulares alemán</a></li>

              </ul>
          </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

<!-- modal: AYUDA - Contacto-->
<div class="modal  fade" id="popup12" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">cerrar</span></button>
            <h3 class="modal-title" id="label"><strong>CONTACTO</strong></h3>
          </div>
          <div class="modal-body">
            <p style="text-align: center">Estamos Aqui para resolver todas tus dudas</p>
            <p style="text-align: justify">



              <form action="/my-handling-form-page" method="post">
    <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" />
    </div>
    <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" />
    </div>
    <div>
        <label for="mail">Celular:</label>
        <input type="email" id="celular" />
    </div>
    <div>
        <label for="msg">Mensaje:</label>
        <textarea id="msg"></textarea>
    </div>

    <div class="button">
        <button type="submit">ENVIAR</button>
    </div>
</form>
          </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

<!-- modal: BIENESTAR BIENVENIDA - Contacto-->

<!-- codigo para modales -->





<!-- Footer section -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container">
      <div class="row">

        <div class="footer-col col-md-3">
          <h5>COMPAÑIA</h5>
          <p>
          <ul>
            <li><a href="#popup" data-toggle="modal" data-target="#popup">Quienes Somos</a></li>
            <li><a href="#popup2" data-toggle="modal" data-target="#popup2">Valores Corporativos</a></li>
            <li><a href="#popup3" data-toggle="modal" data-target="#popup3">Términos y Condiciones</a></li>
            <li><a href="#popup4" data-toggle="modal" data-target="#popup4">Política y Privacidad</a></li>

          </ul>
          </p>
        </div>
        <div class="footer-col col-md-3">
          <h5>CLIENTES</h5>
          <p>
          <ul>
            <li><a href="{{ url('/clientescomofunciona') }}">¿Cómo funciona?</a></li>


          </ul>
          </p>
        </div>
        <div class="footer-col col-md-3">
          <h5>PROFESIONALES</h5>
          <p>
          <ul>
            <li><a href="{{ url('/profesionalescomofunciona') }}">¿Cómo funciona?</a></li>
            <li><a href="{{ url('/iniciarsesion') }}">Inscríbete</a></li>


          </ul>
          </p>
        </div>
    <!--  <div class="footer-col col-md-3">
          <h5>AYUDA</h5>
          <p>
          <ul>
            <li><a href="http://contacto1.dev">Contacto</a></li>


          </ul>
          </p>
        </div> ayuda -->
        <div class="footer-col col-md-3">
          <h5>Síguenos en:</h5>
          <ul class="footer-share">
            <li><a href="https://www.facebook.com/siemprexpertosec/"><i class="fa fa-facebook"></i></a></li>


          </ul>
        </div>

          <div class="footer-copyright py-3 text-center col-md-6" style="color:rgb(252, 251, 252)";>
            © Copyright:
            <a href="{{ url('/') }}">Siemprexpertos</a>
          </div>



      </div>

    </div>

  </div>
  <!-- footer top -->




</footer>
<!-- Footer section -->

<!-- JS FILES -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{asset('siemprexpertos/js/bootstrap.min.js')}}"></script>
<script src="{{asset('siemprexpertos/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('siemprexpertos/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('siemprexpertos/js/retina.min.js')}}"></script>
<script src="{{asset('siemprexpertos/js/modernizr.js')}}"></script>
<script src="{{asset('siemprexpertos/js/main.js')}}"></script>

<!-- links scripts modales -->



<!-- links scripts modales -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script type="text/javascript">

      $("#nameid").select2({
            placeholder: "  B  U  S  C  A  R  ",
            allowClear: true
        });
</script>

<script type="text/javascript">

      $("#nameid2").select2({
            placeholder: "¿Qué servicio profesiona necesitas?",
            allowClear: true
        });
</script>

</body>
</html>
