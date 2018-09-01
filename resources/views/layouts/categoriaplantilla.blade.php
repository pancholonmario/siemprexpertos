<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0" />
    <meta name="description" content="Siemprexpertos es una plataforma web que te ayuda a promocionar tu negocio, tienes una habilidad y eres experto en alguna profesión y buscas trabajo extra entonces inscribete. Consigue más clientes de manera gratuita. Tienes experiencia en: Asesoría, Brindar Cursos, Cuidado en el Bienestar, organizar eventos, cuidado en el hogar, servico técnico.">
    <meta name="author" content="Equipo de Siemprexpertos: Mario Francisco Astudillo, Esteban Gonzales, Mauricio Gonzalez">

    <title>Siemprexpertos.com | Servicios Profesionales, tienes una habilidad y eres experto en alguna profesión o actividad, necesitas ganar dinero extra y buscas trabajo. Inscríbete. Somos una plataforma web que permite a profesionales generar mayores ingresos al prestar sus servicios.</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('siemprexpertos/categorias/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('siemprexpertos/categorias/css/scrolling-nav.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

  <link rel="shortcut icon" href="{{ url('favicon.png') }}">
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"> <img class="img-fluid" src="{{asset('siemprexpertos/categorias/logo4.png')}}"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/') }}">¿NECESITAS UN SERVICIO?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/iniciarsesion') }}">INICIAR SESIÓN <span style="font-size:12pt;">(profesionales)</span> </a>


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


<div class="modal fade" id="modalsomos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(49, 136, 217);">
        <h3 class="modal-title" id="exampleModalLabel" style="color:#edf2f6";>Quienes Somos</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="text-align: center">Descripción</p>
        <p style="text-align: justify">
          <h4>Misión</h4>
          Somos una plataforma de búsqueda de servicios profesionales que conecta clientes que requieren un servicio específico y profesionales dispuestos a brindarlo.
          <h4>Visión</h4>
          Consolidarnos en el mercado nacional como la primera plataforma de búsqueda de servicios profesionales, con proyección a nivel internacional.
        </p>
      </div>
      <div class="modal-footer">







      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="modalvalores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(49, 136, 217);">
        <h3 class="modal-title" id="exampleModalLabel" style="color:#edf2f6";>Valores Corporativos</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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

<div class="modal fade" id="modalterminos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(49, 136, 217);">
        <h3 class="modal-title" id="exampleModalLabel" style="color:#edf2f6";>Términos y Condiciones</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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

          Estas terminos y condiciones se han generado en terminosycondicionesdeusoejemplo.com.

      </p>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalpolitica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(49, 136, 217);">
        <h3 class="modal-title" id="exampleModalLabel" style="color:#edf2f6";>Política y Privacidad</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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
                      <a href="#modalsomos" data-toggle="modal" data-target="#modalsomos" class="tua">Quienes Somos</a>
                  </li>
                  <li>
                      <a href="#modalvalores" data-toggle="modal" data-target="#modalvalores" class="tua">Valores Corporativos</a>
                  </li>
                  <li>
                      <a href="#modalterminos" data-toggle="modal" data-target="#modalterminos" class="tua">Términos y Condiciones</a>
                  </li>
                  <li>
                      <a href="#modalpolitica" data-toggle="modal" data-target="#modalpolitica" class="tua">Política y Privacidad</a>
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
                      <a href="{{ url('/clientescomofunciona') }}" class="tua">¿Como Funciona?</a>
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
                      <a href="{{ url('/profesionalescomofunciona') }}" class="tua">¿Como Funciona?</a>
                  </li>

                  <li>
                      <a href="{{ url('/iniciarsesion') }}" class="tua">Inscríbete</a>
                  </li>

              </ul>
          </div>
          <!--/.Third column-->

          <hr class="clearfix w-100 d-md-none">

          <!--Fourth column
          <div class="col-md-3 mx-auto">
              <h8 class="text-capitalize mb-4 mt-3 font-weight-bold tuh">Ayuda</h8>
              <ul class="list-unstyled"><br>
                  <li>
                      <a href="#!" class="tua">Contacto</a>
                  </li>


              </ul>
          </div> -->
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
              <a href="{{ url('/iniciarsesion') }}" class="btn btn-danger btn-rounded">Registrate!</a>
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

<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

<script type="text/javascript">
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');

        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }
    });

    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>

    <script type="text/javascript">

   $(document).ready(function() {
	$('#validateForm').bootstrapValidator({
	feedbackIcons: {
		valid: 'glyphicon glyphicon-ok',
		invalid: 'glyphicon glyphicon-remove',
		validating: 'glyphicon glyphicon-refresh'
	},
	fields: {
		role: {
			validators: {
				notEmpty: {
					message: 'Escoger un lugar'
				}
			}
		},

		}
	});
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">

      $("#nameid3").select2({
            placeholder: "  B U S C A R  ",
            allowClear: true
        });
</script>







  </body>

</html>
