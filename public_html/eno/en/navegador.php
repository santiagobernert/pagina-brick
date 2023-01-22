<header class="interior">
	<div id="contenedor">
		<a href="index.php"><h1 class="logo"><img src="../img/enorolland-logo.png" alt="ENO.ROLLAND"><img src="../img/enorolland-logo-2.png" alt="ENO.ROLLAND"></h1></a>

		<div class="hamburguesa"><hr><hr><hr></div>
		
		<?php include("login.php") ?>
		
		<nav>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<div class="linea"></div>
				<li class="desplegable">CONSULTING
					<span>
						<a href="vineyard-consulting.php" class="activo-vit">VINEYARD<br>CONSULTING</a>
						<a href="wine-consulting.php" class="activo-eno">WINE<br>CONSULTING</a>
						<a href="laboratory.php" class="activo-lab">LABORATORY</a>
					</span>
				</li>
				<div class="linea"></div>
				<li class="desplegable">
					INSTITUTION 
					<span>
						<a class="scroll" href="institution.php">ABOUT US</a>
						<a class="scroll" href="institution.php#clientes">CUSTOMERS</a>
					</span>
				</li>
				<div class="linea"></div>
				<li><a class="scroll" href="#contacto">CONTACT</a></li>
			</ul>
		<?php include("login.php") ?>
		<?php include("redes.php") ?>			
		</nav>

		<?php include("redes.php") ?>


	</div><!--fin contenedor-->
</header>

<section id="login">
	<div id="contenedor">
			<p>Search the results of your vineyard and wine analysis<br>
				<strong>DOWNLOAD HERE</strong>
			</p>
			<?php include("login.php") ?>

			<div class="vertical"></div>
	</div>
</section>
