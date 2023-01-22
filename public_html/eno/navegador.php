<header class="interior">
	<div id="contenedor">
		<a href="index.php"><h1 class="logo"><img src="img/enorolland-logo.png" alt="ENO.ROLLAND"><img src="img/enorolland-logo-2.png" alt="ENO.ROLLAND"></h1></a>

		<div class="hamburguesa"><hr><hr><hr></div>
		
		<?php include("login.php") ?>
		
		<nav>
			<ul>
				<li><a href="index.php">INICIO</a></li>
				<div class="linea"></div>
				<li class="desplegable">CONSULTORÍA
					<span>
						<a href="asesoramiento-viticola.php" class="activo-vit">ASESORAMIENTO<br>VITÍCOLA</a>
						<a href="asesoramiento-enologico.php" class="activo-eno">ASESORAMIENTO<br>ENOLÓGICO</a>
						<a href="laboratorio-de-analisis.php" class="activo-lab">LABORATORIO</a>
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
		<?php include("login.php") ?>
		<?php include("redes.php") ?>			
		</nav>

		<?php include("redes.php") ?>


	</div><!--fin contenedor-->
</header>

<section id="login">
	<div id="contenedor">
			<p>Buscá tus análisis enólogicos <br>
				<strong>DESCARGALOS AQUÍ</strong>
			</p>
			<?php include("login.php") ?>

			<div class="vertical"></div>
	</div>
</section>
