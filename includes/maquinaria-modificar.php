<?php
include_once("conexion.php");
if(isset($_POST['btn-modificar']))
{ 

 $placa = mysqli_real_escape_string($mysqli, $_POST['input-placa']);  
$marca=mysqli_real_escape_string($mysqli, $_POST['input-marca']); 
$linea=mysqli_real_escape_string($mysqli, $_POST['input-linea']); 
$modelo=mysqli_real_escape_string($mysqli, $_POST['input-modelo']); 
$color=mysqli_real_escape_string($mysqli, $_POST['input-color']); 
$fecha=mysqli_real_escape_string($mysqli, $_POST['input-fecha']); 
$chasis=mysqli_real_escape_string($mysqli, $_POST['input-chasis']); 
$motor=mysqli_real_escape_string($mysqli, $_POST['input-motor']); 
 

    "UPDATE maquinaria SET placa=$placa,marca=$marca,modelo=$linea,linea=$modelo,color=$color,fecha_adquicision=$fecha, chasis=$chasis, motor=$motor WHERE placa=$placa"
    $result = mysqli_query($mysqli, " UPDATE maquinaria SET placa=$placa,marca=$marca,modelo=$linea,linea=$modelo,color=$color,fecha_adquicision=$fecha, chasis=$chasis, motor=$motor WHERE placa=$placa");

echo'<script type="text/javascript">
alert("Informacion Actualizada con exito.");
</script>'

    header("Location:maquinaria-consultar.php");

}
?>



