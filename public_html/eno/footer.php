<section id="contacto" class="parallax">
	<div id="contenedor">
		<h1>CONTACTO</h1>
		<form id="formulario" action="" method="POST">
			<div class="izq">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre y apellido" required>
				<input type="email" name="direccion-mail" id="correoelec" placeholder="Email" required>
			</div>
			<div class="der">
				<textarea name="mensaje" id="mensaje" required>Mensaje</textarea>
			</div>
			<input type="submit" name="submit-form" id="enviar" value="ENVIAR">
		</form>

				<?php 
		if(isset($_POST['submit-form'])){
		    $to = "administracion@enorolland.com.ar"; // this is your Email address
		    $from = $_POST['direccion-mail']; // this is the sender's Email address
		    $first_name = $_POST['nombre'];
		    $subject = "Consulta desde";
		    $message = $first_name . "," . $from ." Escribió:" . "\n\n" . $_POST['mensaje'];

		    $headers = "De:" . $from;
		    mail($to,$subject,$message,$headers);
		    echo "<h5>Mensaje enviado, gracias " . $first_name . ", nos pondremos en contacto.</h5>";
		    // You can also use header('Location: thank_you.php'); to redirect to another page.
		    }
		?>
	</div><!--contenedor-->
</section>


<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13379.209814523349!2d-68.8787198!3d-33.0353346!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x290840da0c017c5b!2sEnoRolland!5e0!3m2!1ses-419!2sar!4v1536600056524" allowfullscreen></iframe>

<footer>
	<div id="contenedor">
		<article>
			<div class="logo-footer">
				<a href="index.php"><img src="img/marca-footer.png" alt="ENO.ROLLAND"></a>
			</div>
			<p class="web">www.enorolland.com.ar©2018
			</p>
			<nav>
				<a href="index.php">INICIO</a>
				<a href="asesoramiento-viticola.php">CONSULTORÍA</a>
				<a href="institucional.php">EMPRESA</a>
				<a href="#contacto" class="ultima scroll">CONTACTO</a>
				<br>
				<span>
					<a href="https://es-la.facebook.com/Eno.RollandAsesoramientoyLaboratorio/" target="_blank"><div class="boton-redes face"></div></a>
					<a href="https://twitter.com/Enorolland" target="_blank"><div class="boton-redes twitt"></div></a>
				</span>
			</nav>
		</article>
		<article class="footer-abajo">
			<a href="https://www.google.com/maps/dir//-33.0353346,-68.8787198/@-33.035335,-68.87872,14z?hl=es-419" target="_blank">
				<div>
				<img src="img/ubicacion-footer.png" alt="ubicación">
				<p>San Martín 610, Luján de Cuyo. Mendoza, Argentina.
				</p>
				</div>
			</a>
			<a href="tel:+542614983037" target="_blank">
				<div>
					<img src="img/celular-footer.png" alt="ubicación">
					<p>+54 261 498 30 37
					</p>
				</div>
			</a>
			<a href="mailto:administracion@enorolland.com.ar" target="_blank">
				<div>
					<img src="img/mail-footer.png" alt="ubicación">
					<p>administracion@enorolland.com.ar
					</p>
				</div>
			</a>
			<div class="firma">
				<h5>DISEÑO Y PROGRAMACIÓN</h5>
				<a href="//bricksg.com.ar" target="_blank"><img src="img/logo-brickfooter.png" alt="BRICK Soluciones Gráficas"></a>
			</div>
		</article>

	</div><!--contenedor-->
</footer>



	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".carrusel").slick({
        dots: true,
        infinite: true,
        arrows:true,
        autoplay: true,
        autoplaySpeed: 5000,
        variableWidth: false,
        pauseOnHover: true,
        pauseOnFocus: false,
      });
    });
  </script>


<!--mueve las imagenes de los fondos con el scroll-->
<script type="text/javascript" src="js/parallax-plugin.js"></script>
<script>
  $('.parallax').parallax({
speed : -0.5
});
</script>

<!--smooth scroll-->
<script>
  $('a.scroll').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top-130
    }, 1000);
    return false;
});
</script>

<!--seccion profesionales-->
<script>
	$(document).ready(function(){
		$("#boton-asesores-locales").css("color","#9FC18F");
		$("div.pros-asesores").addClass("activo");
	});

	$("button.boton-pro").click(function(){
		$(".boton-pro").css("color","#C7C7C7");
		$(this).css("color","#9FC18F");
	});

	$("button#boton-asesores-locales").click(function(){
		$("div.pros-asesores").toggleClass("activo");
		$("div.pros-lab").removeClass("activo");
		$("div.pros-admi").removeClass("activo");
	});
	$("button#boton-en-lab").click(function(){
		$("div.pros-asesores").removeClass("activo");
		$("div.pros-lab").toggleClass("activo");
		$("div.pros-admi").removeClass("activo");
	});
	$("button#boton-admi").click(function(){
		$("div.pros-asesores").removeClass("activo");
		$("div.pros-lab").removeClass("activo");
		$("div.pros-admi").toggleClass("activo");
	});
</script>

<!--seccion tipos de asesoramiento
<script>
	$("section.botones-asesores label").click(function(){
		$("section.botones-asesores label").css("background-color","#7BA5CD");
		$(this).css("background-color","#9FC18F");
	});
	$("#btn-asesoramiento-viticola").click(function(){
		$("#btn-asesoramiento-enologico, #btn-laboratorio-de-analisis").attr("checked", false);
		$(this).attr("checked", true);
	});
	$("#btn-asesoramiento-enologico").click(function(){
		$("#btn-asesoramiento-viticola, #btn-laboratorio-de-analisis").attr("checked", false);
		$(this).attr("checked", true);
	});
	$("#btn-laboratorio-de-analisis").click(function(){
		$("#btn-asesoramiento-enologico, #btn-asesoramiento-viticola").attr("checked", false);
		$(this).attr("checked", true);
	});
</script>-->



<!--agrega estilos al scrolear para el header-->

<script>
var $document = $(document),
    $element = $('header'),
    className = 'primer-scroll';

$document.scroll(function() {
  if ($document.scrollTop() >= 1) {
    // cantidad de pixeles a scrolear;
    // para hacer lo siguiente:
    $element.addClass(className);
  } 
  else{
  	$element.removeClass(className);
  }
});
</script>


<script>
    // menu hamburguesa;
	$("div.hamburguesa").click(function(){
	    $("nav").toggleClass("aparece");
	    $(this).toggleClass("hamburcruz");
	});

	$("label.log-in-btn").click(function(){
		$(this).next().next().toggleClass("abierto");
	});
</script>


</div><!--cierra pantalla-->
</body>
</html>