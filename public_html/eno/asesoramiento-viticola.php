<?php include('header.php');?>
<?php include("navegador.php") ?>




<style>
	header div.envoltura nav ul li:nth-of-type(2){
		color: #8FD6E5;
	}
	header div.envoltura nav ul li:nth-of-type(2):after{
		border-color:#8FD6E5;
	}
	header.primer-scroll div.envoltura nav ul li:nth-of-type(2){
		color: #9FC18F;
	}
	header.primer-scroll div.envoltura nav ul li:nth-of-type(2):after{
		border-color:#9FC18F;
	}

</style>

<?php include('consultoria-todas.php') ?>

<?php include('footer.php');?>

<script>
	$(document).ready(function(){
		$("label.lbl-asesoramiento-viticola").css("background-color","#9FC18F");
		$(".activo-vit").css("color","#9FC18F");
		$("div#asesoramiento-viticola").addClass("ready");
	});
</script>