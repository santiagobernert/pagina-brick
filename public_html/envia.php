<!DOCTYPE HTML>
<html>
<head>

<?php 
// isset determina si una variable está definida o no 
if(isset($_POST['nombre']) && isset($_POST['correo']) ){

$mymail="bricksolucionesgraficas@gmail.com"; //Acá va el mail del cliente

$subject="Consulta desde la página web";

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];

$contenido="Te han escrito una consulta desde bricksg.com.ar:"."\n\n";
$contenido.="Nombre: ".$nombre."\n";
$contenido.="Correo: ".$correo."\n";
$contenido.="La consulta es la siguiente: ".$mensaje."\n";

$headers="From:".$correo;

mail($mymail, $subject, utf8_decode ($contenido), $headers);

$enviado="1";

}else{
	
	$enviado="0";
	
	}

?>

<meta charset="utf-8">
<title>Contacto envia</title>


<style>
body {
	background: url(img/grafico.jpg) no-repeat fixed;
	background-size: cover;
	color:#fff;
	text-align: center;
}

#opacidad{
	width: 100%;
	max-width: 100%;
	position: absolute;
	top: 0px;
	left: 0px;
	bottom: 0px;
	background-color: white;
	opacity: .4;
	z-index: -99;
}

.volver {
	text-decoration:none;
	color:#fff;
	padding:6px;
	font-size: 12px;
	margin-top: 20px;
}

.volver:hover{
	background-color: #fff;
	color:#009ee0;
	-webkit-transition: 0.5s;
	-o-transition: 0.5s;
	transition: 0.5s;
}

#gracias, #error{
width: 30%;
height: 180px;
background: #009ee0;
margin: 100px auto;
padding: 10px;
font-family: 'Roboto', sans-serif;
z-index: 999;
}

h2{
	color: #fff;
}

</style>


</head>

<body>
	
<?php 
if ($enviado="1"){
	echo "<h6>Gracias! Su mensaje fue enviado</h6>";
}else{
		echo "<h6>El mensaje no pudó ser enviado, intente más tarde</h6>";
}
?>


</body>
</html>