<?php

include('conection.php');
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO registro_usuario VALUES('$id','$nombre','$apellido','$correo','$mensaje')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};

?>