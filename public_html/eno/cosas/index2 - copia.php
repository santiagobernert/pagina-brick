<?php include('header.php');?>




<header class="">
	<div id="contenedor">
		<a href="index.php"><h1 class="logo"><img src="img/enorolland-logo-2.png" alt="ENO.ROLLAND"></h1></a>
	</div>
</header>


<!--agrega estilos al scrolear-->

<?php include('navegador.php');?>



<script>
	$(document).ready(function(){
		$("header.primer-scroll").addClass("segundo-scroll");
		$("header.primer-scroll.segundo-croll").css("opacity","0");
	});

$(document).scroll(function() {
  if ($document.scrollTop() >= 200) {
    // cantidad de pixeles a scrolear;
    // para hacer lo siguiente:
    $("header.primer-scroll.segundo-scroll").css("opacity","1");
    $("header.primer-scroll.segundo-scroll").css("z-index","100");
  } 
  else{
  	$("header.primer-scroll.segundo-scroll").css("opacity","0");
  	$("header.primer-scroll.segundo-scroll").css("z-index","-1");
  }

});
</script>

<style>
header{
	position:absolute;
	top: 0;
	background-image: linear-gradient(to bottom, rgba(0,0,0,0.5) 60%, rgba(0,0,0,0));
	padding-bottom:50px;
}

header h1{
	padding:20px 0px;
}

header h1 img{
	height: 100px;
}

header.primer-scroll{
	position: fixed;
	opacity: 0;
	z-index: -1;
	transition: 0s;
}

header.primer-scroll.segundo-scroll{
	z-index: -1;
	background: white;
}


</style>




<?php include('slider.php');?>

<section id="botones-3">
	<div id="contenedor">
		<a href="">
			<div class="boton">
				<img src="img/asesoramiento-viticola.png" alt="Asesoramiento Vitícola">
				<h3>ASESORAMIENTO<br>VITÍCOLA</h3>
				<h5>MÁS INFORMACIÓN</h5>
			</div>
		</a>
		<a href="">
			<div class="boton">
				<img src="img/asesoramiento-enologico.png" alt="Asesoramiento Enológico">
				<h3>ASESORAMIENTO<br>ENOLÓGICO</h3>
				<h5>MÁS INFORMACIÓN</h5>
			</div>
		</a>
		<a href="">
			<div class="boton">
				<img src="img/laboratorio-analisis.png" alt="Asesoramiento Viticola">
				<h3>LABORATORIO<br>DE ANÁLISIS</h3>
				<h5>MÁS INFORMACIÓN</h5>
			</div>
		</a>
	</div>
</section>

<?php include('footer.php');?>