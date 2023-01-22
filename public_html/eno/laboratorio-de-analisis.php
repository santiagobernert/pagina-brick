<?php include('header.php');?>
<?php include("navegador.php") ?>






<?php include('consultoria-todas.php') ?>

<?php include('footer.php');?>

<script>
	$(document).ready(function(){
		$("label.lbl-laboratorio-de-analisis").css("background-color","#9FC18F");
		$(".activo-lab").css("color","#9FC18F");
		$("div#laboratorio-de-analisis").addClass("ready");
	});
</script>