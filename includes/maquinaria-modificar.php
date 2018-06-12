<?php
include_once("configbd.php");
if(isset($_POST['Update']))
{ 
  $id = mysqli_real_escape_string($mysqli, $_POST['id']);
  $notas = mysqli_real_escape_string($mysqli, $_POST['notas']);

    
    $result = mysqli_query($mysqli, "UPDATE apuntes SET notas='$notas' WHERE id=$id");

    header("Location: listar.php");

}
?>

<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM apuntes WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
  $notas = $res['notas'];
}
?>

