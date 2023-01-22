<?php include('header.php');?>
<?php include('navegador.php');?>

<!--h1 class="logo">
	<a href="index.php">
		<img src="img/enorolland-logo-2.png" alt="ENO.ROLLAND">
	</a>
</h1-->

<?php include('slider.php');?>

<?php include('botonesx3.php');?>

<?php include('footer.php');?>

<style>
	section#login{
		display: none;
	}
	header h1.logo img:nth-of-type(1){
	  display: none;
	}
	header h1.logo img:nth-of-type(2){
	  display: inline-block;
	}

	header.primer-scroll h1.logo img:nth-of-type(1){
	  display: inline-block;
	}
	header.primer-scroll h1.logo img:nth-of-type(2){
	  display: none;
	}
</style>

<script>
	$(document).ready(function(){
		$('header').removeClass("interior");
	});

	$(document).scroll(function() {
	  if ($document.scrollTop() >= 1) {
	    // cantidad de pixeles a scrolear;
	    // para hacer lo siguiente:
	    $('header').addClass("interior");
	  } 
	  else{
	  	$('header').removeClass("interior");
	  }
	});
</script>