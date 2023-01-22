<?php include('header.php');?>




<header class="">
	<div id="contenedor">
		<a href="index.php"><h1 class="logo"><img src="img/enorolland-logo.png" alt="ENO.ROLLAND"></h1></a>
	</div>
		
	<div class="envoltura">
		<div id="contenedor">
		<div class="hamburguesa"><hr><hr><hr></div>
		<nav>
			<ul>
				<li><a href="index.php">INICIO</a></li>
				<div class="linea"></div>
				<li class="desplegable">CONSULTORÍA
					<span>
						<a href="asesoramiento-viticola.php">ASESORAMIENTO<br>VITÍCOLA</a>
						<a href="asesoramiento-enologico.php">ASESORAMIENTO<br>ENOLÓGICO</a>
						<a href="laboratorio-de-analisis.php">LABORATORIO</a>
					</span>
				</li>
				<div class="linea"></div>
				<li class="desplegable">
					EMPRESA 
					<span>
						<a class="scroll" href="institucional.php">INSTITUCIONAL</a>
						<a class="scroll" href="institucional.php#clientes">CLIENTES</a>
					</span>
				</li>
				<div class="linea"></div>
				<li><a class="scroll" href="#contacto">CONTACTO</a></li>
			</ul>
		</nav>

		<div class="login">
			<p>Buscá tus analisis enólogicos <br>
				<strong>DESCARGALOS AQUÍ</strong>
			</p>
			<div class="eleccion">
				<a href="" class="ver">VER RESULTADOS</a>
				<input type="checkbox" name="logear" id="logear">
				<label for="logear" id="iniciar-sesion"><img src="img/iniciar-sesion.png">
					<img src="img/iniciar-sesionceleste.png">Iniciar sesión</label>
				<a href="login.php">
					<button id="registrarme">Registrarme</button>
				</a>
				<div class="log">
					<input type="mail" placeholder="email">
					<input type="password" placeholder="Contraseña">
					<input type="submit" value="Iniciar Sesión" class="submit">
				</div>
			</div>
		</div>

		<div class="redes">
			<a href=""><div class="boton-redes face"></div></a>
			<a href=""><div class="boton-redes twitt"></div></a>
			<a href="" class="ingles">English Version</a>
		</div>

		</div><!--fin contenedor-->
	</div>
</header>


<!--agrega estilos al scrolear-->

<script>
var $document = $(document),
    $element = $('header'),
    className = 'primer-scroll';
    className2 = 'segundo-scroll';

$document.scroll(function() {
  if ($document.scrollTop() >= 100) {
    // cantidad de pixeles a scrolear;
    // para hacer lo siguiente:
    $element.addClass(className);
    $("#divisor").addClass("alto-divisor");
  } 
  else {
    $element.removeClass(className);
    $("#divisor").removeClass("alto-divisor");
  }
});

$document.scroll(function() {
  if ($document.scrollTop() >= 350) {
    // cantidad de pixeles a scrolear;
    // para hacer lo siguiente:
    $element.addClass(className2);
  } 
  else {
    $element.removeClass(className2);
  }
});
</script>


<script>
    // menu hamburguesa;
	$("div.hamburguesa").click(function(){
	    $("nav").toggleClass("aparece");
	    $(this).toggleClass("hamburcruz");
	});
</script>

<style>
	header.primer-scroll{
		position: fixed;
		top:0;
		padding-bottom: 0px;
	}
	header.primer-scroll:after{
		display: none;
	}
	header.primer-scroll.segundo-scroll:after{
		display: initial;
	}
		header.primer-scroll div.envoltura div.login{
		display: none;
	}
</style>




<?php include('slider.php');?>

<?php include('botonesx3.php');?>

<?php include('footer.php');?>