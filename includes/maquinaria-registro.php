
<?php

include_once('conexion.php');

if(isset($_POST['Submit'])) {	
	
$placa = mysqli_real_escape_string($mysqli, $_POST['input-placa']);	
$marca=mysqli_real_escape_string($mysqli, $_POST['input-marca']);	
$linea=mysqli_real_escape_string($mysqli, $_POST['input-linea']);	
$modelo=mysqli_real_escape_string($mysqli, $_POST['input-modelo']);	
$color=mysqli_real_escape_string($mysqli, $_POST['input-color']);	
$fecha=mysqli_real_escape_string($mysqli, $_POST['input-fecha']);	
$chasis=mysqli_real_escape_string($mysqli, $_POST['input-chasis']);	
$motor=mysqli_real_escape_string($mysqli, $_POST['input-motor']);	
 

	$result = mysqli_query($mysqli, "INSERT INTO maquinaria(placa, marca, modelo, linea, color, fecha_adquicision, chasis, motor) VALUES ('$placa' ,'$marca','$linea','$modelo','$color','$fecha','$chasis','$motor')");
	
echo'<script type="text/javascript">
alert("Informacion Almacenada");
</script>';

//header("");

	}

?>
