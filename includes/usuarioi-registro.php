<?php
include_once('conexion.php');


$cedula = mysqli_real_escape_string($mysqli, $_POST['input-cedula']);
$nombres = mysqli_real_escape_string($mysqli, $_POST['input-nombre']);
$apellidos = mysqli_real_escape_string($mysqli, $_POST['input-apellido']);
$telefono = mysqli_real_escape_string($mysqli, $_POST['input-telefono']);
$departamento = mysqli_real_escape_string($mysqli, $_POST['input-departamento']);
$municipio = mysqli_real_escape_string($mysqli, $_POST['input-ciudad']);
$direccion = mysqli_real_escape_string($mysqli, $_POST['input-direccion']);
$nombre_usuario = mysqli_real_escape_string($mysqli, $_POST['input-usuario']);
$contraseña = mysqli_real_escape_string($mysqli, $_POST['input-clave']);
$confirmar = mysqli_real_escape_string($mysqli, $_POST['input-confirmar']);
if ($contraseña != $confirmar) {
    echo'<script type="text/javascript">
	alert("Las contraseñas no coinciden");
	</script>';
} else {


    $result = mysqli_query($mysqli, "INSERT INTO usuario(cedula, nombres, apellidos, mucipio, direccion, telefono, nombre_usuario, contraseña) VALUES ('$cedula', '$nombres', '$apellidos', '$municipio', '$direccion', '$telefono', '$nombre_usuario', '$contraseña'");
    echo $result;
    print_r($result);
    if ($result === true) {
        echo'<script type="text/javascript">
			alert("Informacion Almacenada");
		</script>';
    } else {
        echo'<script type="text/javascript">
			alert("Ha ocurrido un error");
		</script>';
    }
//header("");
}
